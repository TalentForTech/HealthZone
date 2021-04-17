const video = document.getElementById('video')
const emo = document.getElementById('emotion')

var emot;
var ar;

Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('models'),
  faceapi.nets.faceExpressionNet.loadFromUri('models')
]).then(startVideo)

function startVideo() {
    navigator.getUserMedia(
      { video: {} },
      stream => video.srcObject = stream,
      err => console.error(err)
    )
}

video.addEventListener('play', () => {
  const canvas = faceapi.createCanvasFromMedia(video)
  canvas.setAttribute('id','canvas1');
  document.body.append(canvas)
  const displaySize = { width: video.width, height: video.height }
  faceapi.matchDimensions(canvas, displaySize)
  var i = setInterval(async () => {
    const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions()
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    if(resizedDetections[length])
    {
      ar = resizedDetections[0]['expressions'];
      emot = Object.keys(ar).reduce(function(a, b){ return ar[a] > ar[b] ? a : b });
      emo.innerHTML=emot;
    }
    canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)
    faceapi.draw.drawDetections(canvas, resizedDetections)
    faceapi.draw.drawFaceLandmarks(canvas, resizedDetections)
    faceapi.draw.drawFaceExpressions(canvas, resizedDetections)

    //graph
    var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Angry', 'Sad', 'Neutral', 'Happy'],
                datasets: [{
                    label: '# of Votes',
                    data: [ar['angry'], ar['sad'], ar['neutral'], ar['happy']],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 206, 86)',
                        'rgb(75, 192, 192)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });



  }, 100)
  setTimeout(function( ) { clearInterval( i ); }, 15000);
})

video.addEventListener("timeupdate", function(){
    if(this.currentTime >= 15) {
        this.pause();
        console.log(emot);
    }
});
