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
    
    .padding-0{
        padding-right:0;
        padding-left:0;
    }
    *{
        font-size:13px;
    }
    </style>
    <div class="container">
    <div class="container " style="text-align:center;">
    <div class="row">
        <div class="col-md-4 padding-0" style="border:1px solid black; "><img src="assets/imgs/puerto_whiteBg.png" style="padding-top:30px;" width="80px" ></div>
        <div class="col-md-4 padding-0">
            <div class="col padding-0" style="border:1px solid black;padding :40px;font-weight:bolder">FORMULAIRE</div>
            <div class="col padding-0" style="border:1px solid black;padding :40px;font-weight:bolder"">DEMANDE D’ABSENCE</div>
        </div>
        <div class="col-md-4 padding-0" style="border:1px solid black">
            <div class="col"style="border:1px solid black;padding :22px;font-weight:bolder" >Date d’application : ${data.created_date}</div>
            <div class="col" style="border:1px solid black;padding :22px;font-weight:bolder">Version A</div>
            <div class="col" style="border:1px solid black;padding :22px;font-weight:bolder">Code : FO- GRH - 011</div>
        </div>
    </div>
    </div>
    <div class="col-md-12  my-2 py-3 text-center" style="background-color:#00c5e8;font-weight:bolder"  style="color:#fff">INFORMATIONS SUR L’EMPLOYE</div>
    <div class="container">
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Nom du collaborateur</div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">${data.firstName} ${data.lastname}</div>
    </div>
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Matricule </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">${data.matricule_employee}</div>
    </div>
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Fonction </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">"${data.fonction}</div>
    </div>
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Département </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">"${data.departement}</div>
    </div>
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Date d’embauche </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;"></div>
    <div class="col-12" style="border:1px solid black;padding:10px;">Motif d’absence : ${data.justification}</div>
    </div>
    <div class="row">
    <div class="col-md-3" style="border:1px solid black;padding:10px;">Date d’absence : </div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">${data.date_start}</div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">Heure : </div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">${data.heur_start}</div>
    </div>
    <div class="row">
    <div class="col-md-3" style="border:1px solid black;padding:10px;">Date d’absence : </div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">${data.date_end}</div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">Heure : </div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">${data.heur_end}</div>
    <div class="col-12" style="border:1px solid black;padding:10px;">Personne de remplacement :  ${data.replacement}</div>
    </div>
    <div class="row">
        <div class="col-md-8" style="border:1px solid black;padding:50px;">
        <div class="col"></div>
        <div class="col" style="border-top:1px solid #000;margin-top:70px"> Signature du Collaborateur</div>
        </div>
        <div class="col-md-4" style="border:1px solid black;padding:10px;"><div>Fait le : </div> Date : ${generate_date()}</div>
    
    </div>
    <div class="row">* Veuillez soumettre ce formulaire rempli à votre supérieur hiérarchique chaque fois que vous prévoyez vous absenter de votre poste de travail.  
    *Motif de maladie : un certificat médical doit obligatoirement être joint à la demande.
    </div>
    </div>
    <div class="container text-center">
    <div class="row"><div class="col-md-12  my-2 py-3 text-center" style="background-color:#00c5e8;font-weight:bolder""  style="color:#fff">APPROBATION *</div>
    <div class="row">
        <div class="col-md-4" style="border:1px solid black;padding:10px;">
            <div class="col" style="border-bottom:1px solid #000">Approuvé</div>
            <div class="col">
            ${approvement_check(data.status)}
            </div>
        </div>
        <div class="col-md-4" style="border:1px solid black;padding:10px;">
            <div class="col" style="border-bottom:1px solid #000;">Commentaire :</div>
            <div class="col" style="padding:50px">${data.comment}</div>
        </div>
        <div class="col-md-4" style="border:1px solid black;padding:10px;">
            <div class="col" style="border-bottom:1px solid #000">Rejeté  </div>
            <div class="col">
            ${approvement_check(data.status_rh)}
            </div>
        </div>
    </div>
    </div>
    <div class="row">*l’approbation, la modification ou le rejet de cette demande, relève de la responsabilité du Manager tout en prenant en considération que la décision finale revient à la direction générale.
    </div>
    </div>
    <div class="container text-center">
    <div class="row"><div class="col-md-12  my-2 py-3 text-center" style="background-color:#00c5e8;font-weight:bolder"  style="color:#fff">EMARGEMENT  *</div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">
    <div class="col" style="border-bottom:1px solid #000">Signature du Manager Département</div>
    <div class="col py-5"></div>
    </div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">
    <div class="col" style="border-bottom:1px solid #000">Signature du Manager Département</div>
    <div class="col py-5"></div>
    </div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">
    <div class="col" style="border-bottom:1px solid #000">Signature du Manager Département</div>
    <div class="col py-5"></div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2" style="border:1px solid #000"></div>
            <div class="col-md-8" style="border:1px solid #000">PUERTO TRANSIT S.A.R.L; 17, bd. Mohammed V, BOVAPES-Building. 8/9 th , 90000 Tanger, MAROC  ; Tél : +212 (0)5 39 94 64 32/33, Fax : +212 (0)5 39 94 16 96, Email : puertotransit@puertotransito.com ; web : www.puertotransit.com</div>
            <div class="col-md-2" style="border:1px solid #000"></div>
        </div>
    </div>
    </div>
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
    
    .padding-0{
        padding-right:0;
        padding-left:0;
    }
    *{
        font-size:13px;
    }
    </style>
    <div class="container">
    <div class="container " style="text-align:center;">
    <div class="row">
        <div class="col-md-4 padding-0" style="border:1px solid black; "><img src="assets/imgs/puerto_whiteBg.png" style="padding-top:30px;" width="80px" ></div>
        <div class="col-md-4 padding-0">
            <div class="col padding-0" style="border:1px solid black;padding :40px;font-weight:bolder">FORMULAIRE</div>
            <div class="col padding-0" style="border:1px solid black;padding :40px;font-weight:bolder"">DEMANDE DE CONGE</div>
        </div>
        <div class="col-md-4 padding-0" style="border:1px solid black">
            <div class="col"style="border:1px solid black;padding :22px;font-weight:bolder" >Date d’application : ${data.created_date}</div>
            <div class="col" style="border:1px solid black;padding :22px;font-weight:bolder">Version A</div>
            <div class="col" style="border:1px solid black;padding :22px;font-weight:bolder">Code : FO- GRH - 011</div>
        </div>
    </div>
    </div>
    <div class="col-md-12  my-2 py-3 text-center" style="background-color:#00c5e8;font-weight:bolder"  style="color:#fff">INFORMATIONS SUR CONGE</div>
    <div class="container">
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Nom du collaborateur</div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">${data.firstName} ${data.lastname}</div>
    </div>
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Matricule </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">${data.matricule_employee}</div>
    </div>
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Fonction </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">"${data.fonction}</div>
    </div>
    <div class="row">
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Département </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;">"${data.departement}</div>
    <div class="col-md-2" style="border:1px solid black;padding:10px;">Date d’embauche </div>
    <div class="col-md-10" style="border:1px solid black;padding:10px;"></div>
  
    <div class="col-md-12  my-2 py-3 text-center" style="background-color:#00c5e8;font-weight:bolder"  style="color:#fff">TYPE DE CONGE SOLLICITE</div>
    <div class="row">
    <div class="col-md-4" style="border:1px solid black;padding:10px;">TYPE DE CONGE :</div><div class="col-md-8" style="border:1px solid black;padding:10px;">${data.conge_type}</div>
    </div>
    <div class="row">
    <div class="col-md-3" style="border:1px solid black;padding:10px;">Date de congé</div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">Du : ${data.date_start}</div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">Au :</div>
    <div class="col-md-3" style="border:1px solid black;padding:10px;">${data.date_end}</div>
    </div>
    <div class="row">
    <div class="col-md-4" style="border:1px solid black;padding:10px;">Jours Ouvrables : ${taken_dayes(data.date_start,data.date_end)}</div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">Nibre des jours prises :  </div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">Solde de Congé :  </div>
    <div class="col-12" style="border:1px solid black;padding:10px;">Personne de remplacement :  ${data.replacement}</div>
    <div class="col-12" style="border:1px solid black;padding:10px;">Un justificatif pour les congés (sauf congé annuel) peut être demandé.</div>
    </div>
    <div class="row">
    <div class="col-md-8" style="border:1px solid black;padding:50px;">
    <div class="col"></div>
    <div class="col" style="border-top:1px solid #000;margin-top:70px">Signature du Collaborateur</div>
    </div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;"><div>Fait le : </div> Date : ${generate_date()}</div>
    </div>
    </div>
   

    

   

    <div class="row">
    * Les dates de congés peuvent être changées en fonction du besoin du département ou du salarié.</br>
    * Le dépôt physique des congés doit être un mois avant.
    </div>
    <div clas="row">
    
    </div>
    </div>
    <div class="col-md-12 text-center">
    <div class="row"><div class="col-md-12  my-2 py-3 text-center" style="background-color:#00c5e8;font-weight:bolder""  style="color:#fff">APPROBATION *</div>
    <div class="row">
        <div class="col-md-4" style="border:1px solid black;padding:10px;">
            <div class="col" style="border-bottom:1px solid #000">Approuvé</div>
            <div class="col">
            ${approvement_check(data.status)}
            </div>
        </div>
        <div class="col-md-4" style="border:1px solid black;padding:10px;">
            <div class="col" style="border-bottom:1px solid #000;">Commentaire :</div>
            <div class="col" style="padding:50px">${data.comment}</div>
        </div>
        <div class="col-md-4" style="border:1px solid black;padding:10px;">
            <div class="col" style="border-bottom:1px solid #000">Rejeté  </div>
            <div class="col">
            ${approvement_check(data.status_rh)}
            </div>
        </div>
    </div>
    </div>
    <div class="row">*l’approbation, la modification ou le rejet de cette demande, relève de la responsabilité du Manager tout en prenant en considération que la décision finale revient à la direction générale.
    </div>
    </div>
    <div class="container text-center">
    <div class="row"><div class="col-md-12  my-2 py-3 text-center" style="background-color:#00c5e8;font-weight:bolder"  style="color:#fff">EMARGEMENT  *</div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">
    <div class="col" style="border-bottom:1px solid #000">Signature du Manager Département</div>
    <div class="col py-5"></div>
    </div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">
    <div class="col" style="border-bottom:1px solid #000">Signature du Manager Département</div>
    <div class="col py-5"></div>
    </div>
    <div class="col-md-4" style="border:1px solid black;padding:10px;">
    <div class="col" style="border-bottom:1px solid #000">Signature du Manager Département</div>
    <div class="col py-5"></div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2" style="border:1px solid #000"></div>
            <div class="col-md-8" style="border:1px solid #000">PUERTO TRANSIT S.A.R.L; 17, bd. Mohammed V, BOVAPES-Building. 8/9 th , 90000 Tanger, MAROC  ; Tél : +212 (0)5 39 94 64 32/33, Fax : +212 (0)5 39 94 16 96, Email : puertotransit@puertotransito.com ; web : www.puertotransit.com</div>
            <div class="col-md-2" style="border:1px solid #000"></div>
        </div>
    </div>
    </div>
    `;
}