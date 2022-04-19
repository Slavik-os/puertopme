function set_type(type){
    let d =`  <div class="row">
    <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black; border-bottom:0.5px solid black;background-color:grey"><span>Réclamation interne</span> </div>
    <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;";> <span>Réclamation externe (Client)</span> </div>
    <div class="col-md-4 p-3" style=";border-top:0.5px solid black;"> <span>Auto-détection</span> </div>
</div>
<div class="row">
    <div class="col-md-4 p-3" style=";border-right:0.5px solid black;"> <span>Suggestion & Amélioration</span> </div>
    <div class="col-md-8 p-3" style=";border-top:0.5px solid black; text-align:left"> <span>Autre, à préciser:</span> </div>
</div>`;
switch(type){
    case 'Autre, à préciser' :
    x = `
    <div class="row">
    <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;border-bottom:0.5px solid black;"><span>Réclamation interne</span> </div>
    <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;";> <span>Réclamation externe (Client)</span> </div>
    <div class="col-md-4 p-3" style=";border-top:0.5px solid black;"> <span>Auto-détection</span> </div>
</div>
<div class="row">
    <div class="col-md-4 p-3" style=";border-right:0.5px solid black;"> <span>Suggestion & Amélioration</span> </div>
    <div class="col-md-8 p-3" style=";border-top:0.5px solid black; text-align:left;background-color:grey"> <span>Autre, à préciser:</span> </div>
</div>
    `;
    break;
    case 'Réclamation interne':
        x = `
        <div class="row">
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;border-bottom:0.5px solid black ;background-color:grey"><span>Réclamation interne</span> </div>
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;";> <span>Réclamation externe (Client)</span> </div>
        <div class="col-md-4 p-3" style=";border-top:0.5px solid black;"> <span>Auto-détection</span> </div>
    </div>
    <div class="row">
        <div class="col-md-4 p-3" style=";border-right:0.5px solid black;"> <span>Suggestion & Amélioration</span> </div>
        <div class="col-md-8 p-3" style=";border-top:0.5px solid black; text-align:left;"> <span>Autre, à préciser:</span> </div>
    </div>
        `;
      
    break;
    case 'Réclamation externe (Client)':
        x = ` <div class="row">
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;border-bottom:0.5px solid black;"><span>Réclamation interne</span> </div>
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black; background-color:grey";> <span>Réclamation externe (Client)</span> </div>
        <div class="col-md-4 p-3" style=";border-top:0.5px solid black;"> <span>Auto-détection</span> </div>
    </div>
    <div class="row">
        <div class="col-md-4 p-3" style=";border-right:0.5px solid black;"> <span>Suggestion & Amélioration</span> </div>
        <div class="col-md-8 p-3" style=";border-top:0.5px solid black; text-align:left"> <span>Autre, à préciser:</span> </div>
    </div>`;
    break;
    case 'Auto-détection':
        x = ` <div class="row">
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;border-bottom:0.5px solid black;"><span>Réclamation interne</span> </div>
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;"> <span>Réclamation externe (Client)</span> </div>
        <div class="col-md-4 p-3" style=";border-top:0.5px solid black;background-color:grey;"> <span>Auto-détection</span> </div>
    </div>
    <div class="row">
        <div class="col-md-4 p-3" style=";border-right:0.5px solid black;"> <span>Suggestion & Amélioration</span> </div>
        <div class="col-md-8 p-3" style=";border-top:0.5px solid black; text-align:left"> <span>Autre, à préciser:</span> </div>
    </div>`;
    break;
    case  'Suggestion & Amélioration':
        x =  ` <div class="row">
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;border-bottom:0.5px solid black;"><span>Réclamation interne</span> </div>
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;"> <span>Réclamation externe (Client)</span> </div>
        <div class="col-md-4 p-3" style=";border-top:0.5px solid black;"> <span>Auto-détection</span> </div>
    </div>
    <div class="row">
        <div class="col-md-4 p-3" style=";border-right:0.5px solid black;background-color:grey"> <span>Suggestion & Amélioration</span> </div>
        <div class="col-md-8 p-3" style=";border-top:0.5px solid black; text-align:left"> <span>Autre, à préciser:</span> </div>
    </div>`;
    break;
    case  'Autre, à préciser:':
        x =  ` <div class="row">
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;border-bottom:0.5px solid black;"><span>Réclamation interne</span> </div>
        <div class="col-md-4 p-3" style="border-right:0.5px solid black;border-top:0.5px solid black;"> <span>Réclamation externe (Client)</span> </div>
        <div class="col-md-4 p-3" style=";border-top:0.5px solid black;"> <span>Auto-détection</span> </div>
    </div>
    <div class="row">
        <div class="col-md-4 p-3" style=";border-right:0.5px solid black;"> <span>Suggestion & Amélioration</span> </div>
        <div class="col-md-8 p-3" style=";border-top:0.5px solid black; text-align:left;background-color:grey;"> <span>Autre, à préciser:</span> </div>
    </div>`;

}

    
    return x;
}

function return_count(data_arr){
    let x ;
    for (let i=0; i < data_arr.length;i++){
        x += `
        <div class="row" style="text-align:left">
        <div class="col-md-2 header-number py-3" style="border-right:0.5px solid black;border-bottom:0.5px solid black;background-color:grey;">N°${i}</div>
        <div class="col-md-4 header-number py-3" style="border-right:0.5px solid black;border-bottom:0.5px solid black;background-color:grey;">${data_arr[i].demand_description}</div>
        <div class="col-md-4 header-number py-3" style="border-right:0.5px solid black;border-bottom:0.5px solid black;background-color:grey;">${data_arr[i].demand_responsable_name}</div>
        <div class="col-md-2 header-number py-3"style="border-bottom:0.5px solid black;background-color:grey;">${data_arr[i].demand_delai}</div>
    </div>
        
        `;
    }
    x = x.replace("undefined",""); // modern problems require modern solutions
    return x;
    
    


}

function action_damilioration(data,action){
   

    return `
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    </head>
    <body>
    <style>
          /* Title */
          .set-border {
            border:0.5px solid black;
            text-align : center;
        }
        .title-image {
            width : 70px;
            height : 70px;
           
            
        }
        .border-img {
            border-right : 0.5px solid black;
            padding : 10px 5px;
        }
        .left-data {
            font-size:12px;
        }

        /* Title end */

        /* Body end */
        .number-holder{
            padding:10px;
        }
        .header-number {
            font-size :15px;
            font-weight: bold;
        }
        .number-text-holder {
            background-color : #a4a5a6;
        }
        /* Body end */
        @media print {
        /* Title */
        .set-border {
            border:0.5px solid black;
            text-align : center;
        }
        .title-image {
            width : 70px;
            height : 70px;
           
            
        }
        .border-img {
            border-right : 0.5px solid black;
            padding : 10px 5px;
        }
        .left-data {
            font-size:12px;
        }

        /* Title end */

        /* Body end */
        .number-holder{
            padding:10px;
        }
        .header-number {
            font-size :15px;
            font-weight: bold;
        }
        .number-text-holder {
            background-color : grey;
            color :#000;
        }
        /* Body end */
        
    }
    
    </style>
<!-- Title  -->    
<div class="container set-border mt-5">
    <div class="row">
        <div class="col-md-2 border-img">
            <img class="title-image" src="http://localhost/puertopme/js_templetes/general-icon.png" alt="">
        </div>
        <div class="col-md-7">
            <div>
                <div class="row">
                <div class="col-md hedaer-formulair" style="border-bottom:1px solid black;padding-top:5px"><h4>FORUMULAIRE</h4></div>
                </div>
                <div class="col-md"><h3 style="font-weight : bold">FICHE  ACTIONS  D'AMELIORATION (AA)</h3></div>
            </div>
        </div>
        <div class="col-md-3" style="border-left: 0.5px solid black">
            <div class="row">
                <div class="col-md" style="border-bottom:0.5px solid black;padding-top:18px"> 
                    <span class="left-data"> Date d’application :${data.date_creation}</span> 
            </div>
        </div>
            <div class="row">
                <div class="col-md" style="border-bottom:0.5px solid black"> 
                <span class="left-data">Version A </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md" style="padding:5px"> 
                    <span class="left-data" >Code : FO-GPA-004</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title end -->

<!-- body -->
<div class="container set-border mt-4" style="text-align:left">
    <div class="row">
        <div class="col-md-2 number-holder">
            <span class="header-number">FICHE N° : ${data.id} </span>
        </div>
        <div class="col-md-2 number-text-holder">

        </div>
    </div>        
</div>

<div class="container set-border mt-4" style="text-align:left">
    <div class="row">
        <div class="col-md-9">
            <div class="row p-2" style="border-right:0.5px solid black;border-bottom:0.5px solid black;">
                <div class="col-md-3">
                    <span class="header-number">Détectée par : ${data.name}</span>
                </div>
                </div>
                
                <div class="row" style="border-right:0.5px solid black">
                <div class="col">
                    <div class="row">
                        <div class="col-md-8  p-2" style="border-right:0.5px solid black"> <span class="header-number"> Service: ${data.service}</span></div>
                        <div class="col-md-4  p-2"><span class="header-number"> Date: ${data.date_creation}</span></div>
                    </div>
                </div>
                </div>
        </div>
        <div class="col-md-3">
        <span class="header-number"> Visa:${data.visa}</span>
        </div>
    </div>
</div>

<div class="container set-border mt-4">
    <div class="row number-text-holder p-1"><span><h5 style="color :#000;"> I-1 TYPE DE NON-CONFORMITE </h5></span></div>
    ${set_type(data.demand_type)}
</div>
<div class="container set-border mt-4">
        <div class="row number-text-holder p-1"
            ><span><h5 style="color :#000;">I-2 DESCRIPTION DU DYSFONCTIONNEMENT RELEVÉ</h5></span
        ></div>
    <div class="row " style="height:100px;text-align:left">
        <span>${data.description}</span>
    </div>
</div>

<div class="container set-border mt-4">
        <div class="row number-text-holder p-1"
            ><span><h5 style="color :#000;">II- CORRECTIONS (effectuées pour débloquer la situation)</h5></span
        ></div>
    <div class="row " style="height:100px;text-align:left">
        <span>${data.correction}</span>
    </div>
</div>

<div class="container set-border mt-4">
        <div class="row number-text-holder p-1"
            ><span><h5 style="color :#000;">III- RECHERCHE ET ANALYSE DES CAUSES</h5></span>
        </div>
    <div class="row " style="height:100px;text-align:left">
        <span>${data.cause}</span>
    </div>
</div>


<div class="container set-border mt-4 " style="text-align:center;">
    <div class="row number-text-holder p-1">
        <span><h5 style="color :#000;">IV- MISE EN PLACE DES ACTION(S) CORRECTIVE(S)</h5></span>
    </div>
    <div class="row">
        <div class="col-md-2 header-number p-2" style="border-right:0.5px solid black;border-bottom:0.5px solid black">N°</div>
        <div class="col-md-4 header-number p-2" style="border-right:0.5px solid black;border-bottom:0.5px solid black">Décisions / Actions</div>
        <div class="col-md-4 header-number p-2" style="border-right:0.5px solid black;border-bottom:0.5px solid black">Responsable</div>
        <div class="col-md-2 header-number p-2"style="border-bottom:0.5px solid black;">Délai (jours)</div>
    </div>
    ${return_count(action)}
</div>




<!-- body End-->
    `;


}