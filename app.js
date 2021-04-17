const APIController = (function() {
    
    const clientId = '';
    const clientSecret = '';

    // private methods
    const _getToken = async () => {

        const result = await fetch('https://accounts.spotify.com/api/token', {
            method: 'POST',
            headers: {
                'Content-Type' : 'application/x-www-form-urlencoded', 
                'Authorization' : 'Basic ' + btoa(clientId + ':' + clientSecret)
            },
            body: 'grant_type=client_credentials'
        });

        const data = await result.json();
        return data.access_token;
    }
    
    const _getTracks = async (token, tracksEndPoint) => {

        const limit = 10;

        const result = await fetch(`${tracksEndPoint}?limit=${limit}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        });

        const data = await result.json();
        return data.items;
    }

    const _getTrack = async (token, trackEndPoint) => {

        const result = await fetch(`${trackEndPoint}`, {
            method: 'GET',
            headers: { 'Authorization' : 'Bearer ' + token}
        });

        const data = await result.json();
        return data;
    }

    return {
        getToken() {
            return _getToken();
        },
        getTracks(token, tracksEndPoint) {
            return _getTracks(token, tracksEndPoint);
        },
        getTrack(token, trackEndPoint) {
            return _getTrack(token, trackEndPoint);
        }
    }
})();


// UI Module
const UIController = (function() {

    //object to hold references to html selectors
    const DOMElements = {
        genre: '#emotion',
        buttonSubmit: '#btn_submit',
        divSongDetail: '#song-detail',
        hfToken: '#hidden_token',
        divSonglist: '.song-list'
    }

    //public methods
    return {

        //method to get input fields
        inputField() {
            return {
                genre: document.querySelector(DOMElements.genre),
                tracks: document.querySelector(DOMElements.divSonglist),
                submit: document.querySelector(DOMElements.buttonSubmit),
                songDetail: document.querySelector(DOMElements.divSongDetail)
            }
        },

        // need method to create a track list group item 
        createTrack(id, name) {
            const html = `<div class="_300-width"><p class="h4" id="${id}">${name}</p></div>`;
            document.querySelector(DOMElements.divSonglist).insertAdjacentHTML('beforeend', html);
        },

        // need method to create the song detail
        createTrackDetail(img, title, artist) {

            const detailDiv = document.querySelector(DOMElements.divSongDetail);
            // any time user clicks a new song, we need to clear out the song detail div
            detailDiv.innerHTML = '';

            const html = 
            `<img src="${img}" class="mimg" alt="" style="width:200px; margin-left:15px;"></h2><div class="stroke-line-2"><div class="div-standard-4"><h2 class="heading-title-copy" style="text-align: left; width: auto;">${title}<br/><br/><span class="text-span-11"> ${artist}</span></div></div>`;

            detailDiv.insertAdjacentHTML('beforeend', html)
        },

        resetTrackDetail() {
            this.inputField().songDetail.innerHTML = '';
        },

        resetTracks() {
            this.inputField().tracks.innerHTML = '';
            this.resetTrackDetail();
        },

        storeToken(value) {
            document.querySelector(DOMElements.hfToken).value = value;
        },

        getStoredToken() {
            return {
                token: document.querySelector(DOMElements.hfToken).value
            }
        }
    }

})();

const APPController = (function(UICtrl, APICtrl) {

    // get input field object ref
    const DOMInputs = UICtrl.inputField();    

    var tracks; 

    // create submit button click event listener
    DOMInputs.submit.addEventListener('click', async (e) => {
        // prevent page reset
        e.preventDefault();
        // clear tracks
        UICtrl.resetTracks();
        //get the token
        const token = await APICtrl.getToken(); 
        UICtrl.storeToken(token); 
        console.log(UICtrl.inputField().genre.innerHTML);        
        // get the list of tracks
        if(UICtrl.inputField().genre.innerHTML == 'happy' || UICtrl.inputField().genre.innerHTML == 'neutral')
            tracks = await APICtrl.getTracks(token, "https://api.spotify.com/v1/playlists/37i9dQZF1DX2UXfvEIZvDK/tracks");
        if(UICtrl.inputField().genre.innerHTML == 'sad' || UICtrl.inputField().genre.innerHTML == 'angry')
            tracks = await APICtrl.getTracks(token, "https://api.spotify.com/v1/playlists/37i9dQZF1DX9uKNf5jGX6m/tracks");
        // create a track list item
        tracks.forEach(el => UICtrl.createTrack(el.track.href, el.track.name))
        document.getElementById('song').style.display = 'block';
    });

    // create song selection click event listener
    DOMInputs.tracks.addEventListener('click', async (e) => {
        // prevent page reset
        e.preventDefault();
        UICtrl.resetTrackDetail();
        // get the token
        const token = UICtrl.getStoredToken().token;
        // get the track endpoint
        const trackEndpoint = e.target.id;
        //get the track object
        const track = await APICtrl.getTrack(token, trackEndpoint);
        // load the track details
        UICtrl.createTrackDetail(track.album.images[2].url, track.name, track.artists[0].name);
    });    

    return {
        init() {
            console.log('App is starting');
        }
    }

})(UIController, APIController);

// will need to call a method to load the genres on page load
APPController.init();




