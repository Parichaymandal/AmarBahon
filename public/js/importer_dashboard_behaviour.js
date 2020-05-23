/**
 * Created by Abbir on 3/19/2017.
 */
//Getting the present screen size
var size = {
    width: window.innerWidth || document.body.clientWidth,
    height: window.innerHeight || document.body.clientHeight
}


//variable declaration area
var importer_info = document.getElementById('importer_info');
var importer_image = document.getElementById('importer_image');
var importer_personal_info = document.getElementById('importer_personal_info');
var posted_jobs = document.getElementById('posted_jobs');
var jobs_notifications = document.getElementById('jobs_notifications');
var negotiation = document.getElementById('negotiation');

//Page load event
function myFunction() {
    negotiation.style.display = 'none';
    jobs_notifications.style.display = 'none';


    importer_info.style.minHeight = (size.height) + 'px';

    importer_image.style.minHeight = (size.height/1.9)+'px';
    //importer_image.style.backgroundColor = '#45AB95';

    importer_personal_info.style.height = (size.height-(size.height/1.9))+'px';
    //importer_personal_info.style.backgroundColor = '#AABBCC';

}



//Notification button working area
function getNotifications(){
    posted_jobs.style.display = 'none';
    negotiation.style.display = 'none';
    jobs_notifications.style.display = 'block';
}

//Previous button working area
function getJobs(){
    jobs_notifications.style.display = 'none';
    negotiation.style.display = 'none';
    posted_jobs.style.display = 'block';
}

//Negotiation button working area
function getNegotiation(){
    jobs_notifications.style.display = 'none';
    negotiation.style.display = 'none';
    negotiation.style.display = 'block';
}


