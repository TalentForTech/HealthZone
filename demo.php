<?php

require 'token_generator.php';
require 'priaid_client.php';

class Demo
{
    private $config;
    private $diagnosisClient;
    
    function __construct()
    {
        $this->config = parse_ini_file("config.ini");
    }
    
    private function checkRequiredParameters()
    {
        $pass = true;
        
        if (!isset($this->config['username']))
        {
            $pass = false;
            print "You didn't set username in config.ini" ;
        }

        if (!isset($this->config['password']))
        {
            $pass = false;
            print "You didn't set password in config.ini" ;
        }
            
        if (!isset($this->config['authServiceUrl']))
        {
            $pass = false;
            print "You didn't set authServiceUrl in config.ini" ;
        }

        if (!isset($this->config['healthServiceUrl']))
        {
            $pass = false;
            print "You didn't set healthserviceUrl in config.ini" ;
        }
         
        return $pass;
    }
    
    public function simulate()
    {
        if (!$this->checkRequiredParameters())
            return;
        
        $tokenGenerator = new TokenGenerator($this->config['username'],$this->config['password'],$this->config['authServiceUrl']);
        $token = $tokenGenerator->loadToken();
        
        if (!isset($token))
            exit();

        $this->diagnosisClient = new DiagnosisClient($token, $this->config['healthServiceUrl'], 'en-gb');
        print("<html>
                <head>
                <SCRIPT language=JavaScript>
                function reload(form)
                {
                var val=form.body.options[form.body.options.selectedIndex].value; 
                self.location='demo.php?cat=' + val ;
                }
                function reload3(form)
                {
                var val=form.body.options[form.body.options.selectedIndex].value; 
                var val2=form.bodysub.options[form.bodysub.options.selectedIndex].value; 

                self.location='demo.php?cat=' + val + '&cat3=' + val2 ;
                }
                function reload4(form)
                {
                var val=form.body.options[form.body.options.selectedIndex].value; 
                var val2=form.bodysub.options[form.bodysub.options.selectedIndex].value; 
                var val3=form.sym.options[form.sym.options.selectedIndex].value; 

                self.location='demo.php?cat=' + val + '&cat3=' + val2 + '&cat4=' + val3 ;
                }
                </script>
                </head>   
            <body>");

        $cat = 0;
        $cat3 = 0;
        $cat4 = 0;

        if(isset($_GET['cat']))
            $cat=$_GET['cat'];

        if(isset($_GET['cat3']))
            $cat3=$_GET['cat3'];

        if(isset($_GET['cat4']))
            $cat4=$_GET['cat4'];

        $bodyLocations = $this->diagnosisClient->loadBodyLocations();
        if (!isset($bodyLocations))
            exit();
        
        $this->printSimpleObject($bodyLocations,'submit1','body',$cat, 'reload', 'Body locations');
        
        // get random body location
        
        $bodySublocations = $this->diagnosisClient->loadBodySublocations($cat);
        if (!isset($bodySublocations))
            exit();
        
        $this->printSimpleObject($bodySublocations,'submit2','bodysub', $cat3, 'reload3'," Body Sublocations");
            
            // get random body sublocation
            
        $symptoms = $this->diagnosisClient->loadSublocationSymptoms($cat3,'man');
        if (!isset($symptoms))
            exit();
        if (count($symptoms) == 0)
            die("No symptoms for selected body sublocation");
                
            $this->printSimpleObject($symptoms,'submit3','sym', $cat4, 'reload4', 'Symptoms in body sublocation');
                
            // get diagnosis
            $selectedSymptoms = array($cat4);
            $diagnosis = $this->diagnosisClient->loadDiagnosis($selectedSymptoms, 'male', 1988);
            if (!isset($diagnosis))
                exit();
            print("<h3>Calculated diagnosis:");
            $this->printDiagnosis($diagnosis);
            
           
        print('</body></html>');
    }
    
    private function printDiagnosis($object)
    {
        print "<pre>" ;
        print "<b>ID\tName</b>";
        array_map(function ($issue) {
            echo "\n", $issue['Issue']['ID'], "\t", $issue['Issue']['Name']," (", $issue['Issue']['Accuracy'],"%)\n";
            echo "<b>Specialisations</b> -> ";
            array_map(function ($spec)
            {
              echo $spec['Name'],"(",$spec['ID'],")", "\t";
            }, $issue['Specialisation']);
            echo "\n";
        }, $object);
        print "</pre>" ; 
    }
        
    private function printSimpleObject($object,$name,$type,$cat,$fn,$select)
    {   
        print "<form action='demo.php' method='POST'>";
        print "<select name='$type' onchange='$fn(this.form)'>";
        print "<option>$select</option>";
        
        foreach ($object as $var) {
            if ((int)$var['ID'] == (int)$cat) {
                echo "<option value='", $var['ID'], "' selected>", $var['Name'], "</option>";
            }
            else
                echo "<option value='", $var['ID'], "'>", $var['Name'], "</option>";
        }
        print "</select>" ;

    }
}

$demo = new Demo();
$demo->simulate();

?>