async function loadNotification() {
	let url ='http://localhost/puertopme/inc/notification_system.php';
    const response = await fetch(url);
    const names = await response.json();
	let i = [];
	for(data in names){
		i.push(names[data]);
	}

		for(data in names){
			create_notification(names[data],i.length);
		}	 
		
   }
 loadNotification();

function create_notification(data,datalen){
	let parent_row = document.getElementById("noti_parent");

	let image_holder = document.createElement("div");
	let image = document.createElement("img");

	let info_row = document.createElement("div");	
	let uname_holder = document.createElement("div");	
	let full_name_span = document.createElement("span");
	let delete_button = document.createElement("i");
	let etat_div = document.createElement("div");	
	let date_create = document.createElement("div");

	image_holder.className +='col-lg-3 col-sm-3 col-3 text-center';
	image.className+='noti-image rounded-circl';
	image_holder.appendChild(image);
	image.src= data.photo;
	
	info_row.className+='col-lg-8 col-sm-8 col-8';
	uname_holder.className+='uname-holder';
	full_name_span.innerText = data.first_name+" "+data.last_name+"("+data.matricule+")";
	full_name_span.className+='text-primary';

	delete_button.className+='fa fa-times';
	delete_button.setAttribute("onlick",'delete_notification('+data.matricule+')');

	uname_holder.appendChild(full_name_span);
	uname_holder.appendChild(delete_button);
	info_row.appendChild(uname_holder);

	etat_div.className+='etat_div  m-3';
	etat_div.innerText = 'l`etat de l`emploi a change';

	date_create.className+='date_div m-2';
	date_create.innerText = data.date_perm;

	let line = document.createElement("hr");
	parent_row.appendChild(image_holder);
	
	parent_row.appendChild(info_row);
	parent_row.appendChild(etat_div);
	parent_row.appendChild(date_create);
	parent_row.appendChild(line);

	document.getElementById("notification-count").innerText = datalen;
	
	
	
		
	
	
	
}
