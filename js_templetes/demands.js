function generate_date(){
    let today = new Date();
    let date = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
    return date;
}

function taken_dayes(date_s,date_e){
    const date1 = new Date(date_s);
    const date2 = new Date(date_e);
    const diffTime = Math.abs(date2 - date1);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
    return diffDays
}
function cal_sumdays(date_s,date_e){
    const date1 = new Date(date_s);
    const date2 = new Date(date_e);
    const diffTime = Math.abs(date2 - date1);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
    (diffDays > 7)?x = Math.round(diffDays / 7) : x = diffDays ;
    return x ;
}

function approvement_check(v){
    switch(v){
        case null:
            return '';
            break;
        case 'True':
            return ' <img src="assets/tags/approved.png" width="300px" height="150px" alt="">';
            break;
        case 'False':
            return ' <img src="assets/tags/declined.png" width="300px" height="150px" alt="">';
            break;
            
    }
}

function set_approve(status,status_rh,comment,departement){
   

    if (departement=='RH'){
        if(status_rh=='True' && comment ==''){
            return `
            <div class="row">

            <div class="col-md-4 b-right">
                <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
                <div class="container"><i class="fa-solid fa-check" style="font-size:100px;color:green"></i></div>
            </div>
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
                <div style="text-align:left">Commentaire:</div>
            </div>
        
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
                <div style="text-align:left">Commentaire:</div>
            </div>
        </div>
            `;
        }else if(status_rh=='True' && comment !='') {
            return `
            <div class="row">

            <div class="col-md-4 b-right">
                <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
                <div class="container"></i></div>
            </div>
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
                <div style="text-align:left">Commentaire: ${comment}</div>
            </div>
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
                <div style="text-align:left">Commentaire:</div>
            </div>
        </div>
            
            `;
        } else if (status_rh ==''){
            return `  <div class="row">

            <div class="col-md-4 b-right">
                <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
                <div class="container"></i></div>
            </div>
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
                <div style="text-align:left">Commentaire:</div>
            </div>
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
                <div style="text-align:left">Commentaire: ${comment}</div>
            </div>
        </div>`;
        }

    }

    if(status !='True' || status_rh !='True'){
        if (status_rh!='True'){
            return `  <div class="row">

            <div class="col-md-4 b-right">
                <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
                <div class="container"></i></div>
            </div>
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
                <div style="text-align:left">Commentaire:</div>
            </div>
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
                <div style="text-align:left">Commentaire: ${comment}</div>
            </div>
        </div>`;
        } 
    }  

    if (status =='True' || status_rh=='True'){
        if (status_rh !='True' ){
            return `  <div class="row">

            <div class="col-md-4 b-right">
                <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
                <div class="container"></i></div>
            </div>
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
                <div style="text-align:left">Commentaire:</div>
            </div>
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
                <div style="text-align:left">Commentaire: </div>
            </div>
        </div>`;
        }

        else if(status_rh=='True' && comment =='') {
            return `  <div class="row">

            <div class="col-md-4 b-right">
                <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
                <div class="container"><i class="fa-solid fa-check" style="font-size:100px;color:green"></i></div>
            </div>
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
                <div style="text-align:left">Commentaire:</div>
            </div>
        
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
                <div style="text-align:left">Commentaire:</div>
            </div>`;
        }
        else if(status_rh=='True' && comment !=''){
            return `  <div class="row">

            <div class="col-md-4 b-right">
                <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
                <div class="container"></div>
            </div>
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
                <div style="text-align:left">Commentaire:${comment}</div>
            </div>
        
        
            <div class="col-md-4 b-right">
                <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
                <div style="text-align:left">Commentaire:</div>
            </div>`;

        } 
    }
    if (status !='True' || status_rh !='True'){
        return `  <div class="row">

        <div class="col-md-4 b-right">
            <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
            <div class="container"></div>
        </div>
    
        <div class="col-md-4 b-right">
            <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
            <div style="text-align:left">Commentaire:</div>
        </div>
    
    
        <div class="col-md-4 b-right">
            <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
            <div style="text-align:left">Commentaire: ${comment}</div>
        </div>`;
    } else if(status_rh != 'True'){
        return `  <div class="row">

        <div class="col-md-4 b-right">
            <div style="font-weight:bold;border-bottom:0.5px solid black">Approuvé</div>
            <div class="container"></div>
        </div>
    
        <div class="col-md-4 b-right">
            <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Approuvé avec modification</div>
            <div style="text-align:left">Commentaire:</div>
        </div>
    
    
        <div class="col-md-4 b-right">
            <div class="" style="font-weight:bold;border-bottom:0.5px solid black;" >Rejeté  </div>
            <div style="text-align:left">Commentaire: ${comment}</div>
        </div>`;
    } 



}

function conge(data){
return`
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

    .b-right {
        border-right : 0.5px solid black;
    }
    .b-top {
        border-top : 0.5px solid black;
    }
    
    .img-s {
        width : 200px;
        height:200px;
    }

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
    .b-border {
        border : 0.5px solid black;
    }
    /* Body end */
    
}

</style>
<!-- Title  -->    
<div class="container set-border mt-5">
<div class="row">
    <div class="col-md-2 border-img">
        <img class="title-image" src="http://localhost/puertopme/assets/imgs/general-icon.png" alt="">
    </div>
    <div class="col-md-7">
        <div>
            <div class="row">
            <div class="col-md hedaer-formulair" style="border-bottom:1px solid black;padding-top:5px"><h4>FORUMULAIRE</h4></div>
            </div>
            <div class="col-md"><h3 style="font-weight : bold">DEMANDE D'ABSENCE</h3></div>
        </div>
    </div>
    <div class="col-md-3" style="border-left: 0.5px solid black">
        <div class="row">
            <div class="col-md" style="border-bottom:0.5px solid black;padding-top:18px"> 
                <span class="left-data"> Date d’application : ${data.created_date}</span> 
        </div>
    </div>
        <div class="row">
            <div class="col-md" style="border-bottom:0.5px solid black"> 
            <span class="left-data">Version A </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md" style="padding:5px"> 
                <span class="left-data" >Code : FO - GRH - 011</span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Title end -->

<!-- body -->

<div class="container set-border mt-3">
<div class="row" style="background-color:grey"><span style="font-weight:bold">INFORMATIONS SUR L’EMPLOYE</span></div>
</div>

<div class="container set-border" style="text-align:left">
<div class="row">
    <div class="col-md-3 py-2 b-right">Nom du collaborateur</div>
    <div class="col-md-9  py-2">${data.firstName+' '+data.lastname }</div>
</div>

<div class="row b-top">
    <div class="col-md-3 py-2 b-right">Matricule</div>
    <div class="col-md-9  py-2">${data.matricule_employee}</div>
</div>

<div class="row b-top">
    <div class="col-md-3 py-2 b-right">Fonction</div>
    <div class="col-md-9  py-2">${data.fonction}</div>
</div>

<div class="row b-top">
    <div class="col-md-3 py-2 b-right">Département</div>
    <div class="col-md-9  py-2">${data.departement}</div>
</div>

<div class="row b-top">
    <div class="col-md-3 py-2 b-right">Date d’embauche</div>
    <div class="col-md-9  py-2"></div>
</div>

<div class="row b-top">
    <div class="col py-3">Motif d’absence :${data.justification}</div>
</div>


<div class="row b-top">
   <div class="col-md-3 b-right py-2">Date d’absence :</div>
   <div class="col-md-3 b-right py-2">${data.date_start}</div>
   <div class="col-md-3 b-right py-2">Heure :</div>
   <div class="col-md-3 b-right py-2">${data.heur_start}</div>
</div>

<div class="row b-top">
   <div class="col-md-3 b-right py-2">Date d’absence :</div>
   <div class="col-md-3 b-right py-2">${data.date_end}</div>
   <div class="col-md-3 b-right py-2">Heure :</div>
   <div class="col-md-3 b-right py-2">${data.heur_end}</div>
</div>

<div class="row b-top">
    <div class="col py-3">Personne de remplacement :${data.replacement}</div>
</div>

<div class="row b-top">
    <div class="col-md-6 b-right" style="padding-top:100px">
        <div class="container set-border"></div>
        <div class="container">Signature du Collaborateur</div>
    </div>
    <div class="col-md-5 py-5">Date : ${data.created_date}</div>
</div>
</div>
<div class="container mt-4">
* Veuillez soumettre ce formulaire rempli à votre supérieur hiérarchique chaque fois que vous prévoyez vous absenter de votre poste de travail.  
*Motif de maladie : un certificat médical doit obligatoirement être joint à la demande.
</div>

<div class="container set-border mt-3">
<div class="row" style="background-color:grey"><span style="font-weight:bold">APPROBATION *</span></div>
</div>

<div class="container set-border">
   ${set_approve(data.status,data.status_rh,data.comment,data.departement)}
</div>


<div class="container set-border mt-3">
<div class="row" style="background-color:grey"><span style="font-weight:bold">EMARGEMENT </span></div>
</div>

<div class="container set-border">
<div class="row">
<div class="col-md-4 b-right pb-5">Signature du Manager Département</div>
<div class="col-md-4 b-right pb-5">Signature du Manager RH</div>
<div class="col-md-4  pb-5">Signature du Directeur Général</div>
</div>
</div>


<!-- body End-->

<!-- Footer -->

<div class="container set-border mt-5" style="font-size:13px">
<div class="row">
    <div class="col-md-2 b-right"></div>
    <div class="col-md-8 b-right">PUERTO TRANSIT S.A.R.L; 17, bd. Mohammed V, BOVAPES-Building. 8/9 th , 90000 Tanger, MAROC ; Tél : +212 (0)5 39 94 64 32/33, Fax : +212 (0)5 39 94 16 96, Email : puertotransit@puertotransito.com ; web : www.puertotransit.com</div>
    <div class="col-md-2"></div>
</div>
</div>

<!-- Footer End-->
    `;
}

function absence(data){
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

        .b-right {
            border-right : 0.5px solid black;
        }
        .b-top {
            border-top : 0.5px solid black;
        }
        
        .img-s {
            width : 200px;
            height:200px;
        }

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
        .b-border {
            border : 0.5px solid black;
        }
        /* Body end */
        
    }
    
    </style>
<!-- Title  -->    
<div class="container set-border mt-5">
    <div class="row">
        <div class="col-md-2 border-img">
            <img class="title-image" src="http://localhost/puertopme/assets/imgs/general-icon.png" alt="">
        </div>
        <div class="col-md-7">
            <div>
                <div class="row">
                <div class="col-md hedaer-formulair" style="border-bottom:1px solid black;padding-top:5px"><h4>FORUMULAIRE</h4></div>
                </div>
                <div class="col-md"><h3 style="font-weight : bold">DEMANDE D'ABSENCE</h3></div>
            </div>
        </div>
        <div class="col-md-3" style="border-left: 0.5px solid black">
            <div class="row">
                <div class="col-md" style="border-bottom:0.5px solid black;padding-top:18px"> 
                    <span class="left-data"> Date d’application : ${data.created_date}</span> 
            </div>
        </div>
            <div class="row">
                <div class="col-md" style="border-bottom:0.5px solid black"> 
                <span class="left-data">Version A </span>
                </div>
            </div>
            <div class="row">
                <div class="col-md" style="padding:5px"> 
                    <span class="left-data" >Code : FO - GRH - 011</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title end -->

<!-- body -->

<div class="container set-border mt-3">
    <div class="row" style="background-color:grey"><span style="font-weight:bold">INFORMATIONS SUR L’EMPLOYE</span></div>
</div>

<div class="container set-border" style="text-align:left">
    <div class="row">
        <div class="col-md-3 py-2 b-right">Nom du collaborateur</div>
        <div class="col-md-9  py-2">${data.firstName +' '+data.lastname}</div>
    </div>

    <div class="row b-top">
        <div class="col-md-3 py-2 b-right">Matricule</div>
        <div class="col-md-9  py-2">${data.matricule_employee}</div>
    </div>

    <div class="row b-top">
        <div class="col-md-3 py-2 b-right">Fonction</div>
        <div class="col-md-9  py-2">${data.fonction}</div>
    </div>


    <div class="row b-top">
        <div class="col-md-3 py-2 b-right">Département</div>
        <div class="col-md-9  py-2">${data.departement}</div>
    </div>

    <div class="row b-top">
        <div class="col-md-3 py-2 b-right">Date d’embauche</div>
        <div class="col-md-9  py-2"></div>
    </div>
</div>

<div class="container set-border mt-3">
    <div class="row" style="background-color:grey"><span style="font-weight:bold">TYPE DE CONGE SOLLICITE</span></div>
</div>

<div class="container set-border">
    <div class="row">
        <div class="col-md-2 py-2 b-right">TYPE DE CONGE : </div>
        <div class="col-md-2 py-2">${data.conge_type}</div>
    </div>
</div>

<div class="container mt-2 set-border">
    <div class="row">
        <div class="col-md-2 b-right py-2">Date de congé</div>
        <div class="col-md-2 b-right py-2">Du :${data.date_start}</div>
        <div class="col-md-2  py-2">Au : ${data.date_end}</div>
    </div>
</div>

<div class="container set-border mt-2">
<div class="row">
        <div class="col-md-3 b-right py-3">Jours Ouvrables : ${cal_sumdays(data.date_start,data.date_end)}</div>
        <div class="col-md-3 b-right py-3">Nombre des jours prises : ${taken_dayes(data.date_start,data.date_end) -  cal_sumdays(data.date_start,data.date_end)  } </div>
        <div class="col-md-3 py-3">Solde de Congé : </div>
    </div>
</div>

<div class="container set-border mt-2">
    <div class="row p-3">Personne de remplacement :  ZEKRI Ahmed</div>
    <div class="row p-3" style="border-top:0.5px solid black">
    Un justificatif pour les congés (sauf congé annuel) peut être demandé.
    </div>
</div>

<div class="container set-border">
    <div class="row">
        <div class="col-md-6 b-right" style="padding:100px">
            <div class="container set-border"></div>
            <div class="container">Signature du Collaborateur</div>
        </div>
        <div class="col-md-4">Date : ${data.created_date}</div>
    </div>
</div>


<div class="container set-border mt-3">
    <div class="row" style="background-color:grey"><span style="font-weight:bold">APPROBATION DU CONGE*</span></div>
</div>
<div class="container set-border">
   ${set_approve(data.status,data.status_rh,data.comment,data.departement)}
</div>

<div class="container set-border mt-3">
    <div class="row" style="background-color:grey"><span style="font-weight:bold">APPROBATION DU CONGE*</span></div>
</div>
<div class="container set-border">
<div class="row">
<div class="col-md-4 b-right pb-5">Signature du Manager Département</div>
<div class="col-md-4 b-right pb-5">Signature du Manager RH</div>
<div class="col-md-4  pb-5">Signature du Directeur Général</div>
</div>
</div>



<!-- body End-->

<!-- Footer -->

<div class="container set-border mt-5" style="font-size:13px">
    <div class="row">
        <div class="col-md-2 b-right"></div>
        <div class="col-md-8 b-right">PUERTO TRANSIT S.A.R.L; 17, bd. Mohammed V, BOVAPES-Building. 8/9 th , 90000 Tanger, MAROC ; Tél : +212 (0)5 39 94 64 32/33, Fax : +212 (0)5 39 94 16 96, Email : puertotransit@puertotransito.com ; web : www.puertotransit.com</div>
        <div class="col-md-2"></div>
    </div>

</div>

<!-- Footer End-->
    `;
}