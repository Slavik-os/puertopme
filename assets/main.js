// inputs :
let matricule = document.getElementById('matricule');
let photo = document.getElementById('photo');
let firstname = document.getElementById('firstname');
let secondname = document.getElementById("lastname");
let cin = document.getElementById("cin");
let email = document.getElementById('email');
let date_em = document.getElementById("date_em");
let address = document.getElementById("address");
let departemenet = document.getElementById('departement');
let fonction = document.getElementById("fonction");
let post = document.getElementById("post");
let burreaux = document.getElementById("burreaux");
let telephone = document.getElementById("tele_portable");
let extenstion = document.getElementById("extenstion");
let fix = document.getElementById("fix_direct");
let edit = (elem)=>{
    let table_elements = elem.parentElement.parentElement.children ; 
    matricule.value =  table_elements[0].innerHTML;
    firstname.value  = table_elements[2].innerHTML;
    secondname.value = table_elements[3].innerHTML;
    cin.value  = table_elements[4].innerHTML;
    email.value = table_elements[5].innerHTML;
    date_em.value = table_elements[6].innerHTML;
    address.value = table_elements[7].innerHTML;
    
    switch(table_elements[8].innerHTML){
        case 'FINANCE': 
            departemenet.innerHTML = `
            <select class="form-select"  id="departement" name="departements">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="It">IT</option>
                  <option value="RH">RH</option>
                  <option value="Finance" selected>Finance</option>
                </select>
            `
            break;
        case 'rh': 
            departemenet.innerHTML = `
            <select class="form-select"  id="departement" name="departements">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="It">IT</option>
                  <option value="RH" selected>RH</option>
                  <option value="Finance">Finance</option>
                </select>
            `
            break;
        case 'IT': 
            departemenet.innerHTML = `
            <select class="form-select"  id="departement" name="departements">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="It" selected>IT</option>
                  <option value="RH">RH</option>
                  <option value="Finance">Finance</option>
                </select>
            `
            break; 
    }

    fonction.value = table_elements[10].innerHTML;
    post.value = table_elements[11].innerHTML;
    burreaux.value = table_elements[12].innerHTML;
    telephone.value = table_elements[13].innerHTML;
    extenstion.value = table_elements[14].innerHTML;
    fix.value = table_elements[15].innerHTML;
    console.log(document.getElementById("hidden"));
    console.log('test');
    
}

