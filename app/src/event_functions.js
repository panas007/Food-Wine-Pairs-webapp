
function addFavorites(category,value){
    //event.preventDefault();

    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    var ip = "php_logic/events_helper.php";
    ajaxRequest.open("POST", ip, true);
    ajaxRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    //var conid = document.getElementById("ConcertID").value;
    //document.getElementById("con_t").innerHTML = document.getElementById("cs").value;
    var queryString = "type=Add_to_fav";

    queryString += "&userid=" + userid;
    queryString += "&conid=" + conid;
    queryString += "&title=" + col2;
    queryString += "&date=" + col3;
    //alert(queryString);
    
    ajaxRequest.send(queryString);
}

function delFavorites(conid,userid,concertid) {
    //event.preventDefault();

    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var ajaxDisplay = document.getElementById("show_table");
            ajaxDisplay.innerHTML = this.responseText;
        }
    };
    var ip = "php_logic/events_helper.php";
    ajaxRequest.open("POST", ip, true);
    ajaxRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    var queryString = "type=del_fav";


    queryString += "&conid=" + conid;
    queryString += "&userid=" + userid;
    queryString += "&concertid=" + concertid;
    //alert(concertid);

    ajaxRequest.send(queryString);
}

function addnewConcert(id, title, date, artistname, category,startdate,enddate,tickets,userid){
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var ajaxDisplay = document.getElementById("show_table");
            ajaxDisplay.innerHTML = this.responseText;
        }
    };
    var ip = "php_logic/organizer_helper.php";
    ajaxRequest.open("POST", ip, true);
    ajaxRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    var queryString = "type=Add_con";


    queryString += "&id=" + id;
    queryString += "&title=" + title;
    queryString += "&date=" + date;
    queryString += "&artistname=" + artistname;
    queryString += "&category=" + category;
    queryString += "&startdate=" + startdate;
    queryString += "&enddate=" + enddate;
    queryString += "&tickets=" + tickets;
    queryString += "&organizerid=" + userid;

    //alert(queryString);

    ajaxRequest.send(queryString);
}

function delConcert(col1,userid) {
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var ajaxDisplay = document.getElementById("show_table");
            ajaxDisplay.innerHTML = this.responseText;
        }
    };
    var ip = "php_logic/organizer_helper.php";
    ajaxRequest.open("POST", ip, true);
    ajaxRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    var queryString = "type=Del_con";


    queryString += "&id=" + col1;
    queryString += "&organizerid=" + userid;
    //alert(queryString);


    ajaxRequest.send(queryString);
}

function editCon(id,title,date,artist,category,startdate,enddate,tickets,userid) {
    var ajaxRequest = new XMLHttpRequest();
    ajaxRequest.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var ajaxDisplay = document.getElementById("show_table");
            ajaxDisplay.innerHTML = this.responseText;
        }
    };
    var ip = "php_logic/organizer_helper.php";
    ajaxRequest.open("POST", ip, true);
    ajaxRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    var queryString = "type=Edit_con";


    queryString += "&id=" + id;
    queryString += "&title=" + title;
    queryString += "&date=" + date;
    queryString += "&artistname=" + artist;
    queryString += "&category=" + category;
    queryString += "&startdate=" + startdate;
    queryString += "&enddate=" + enddate;
    queryString += "&tickets=" + tickets;
    queryString += "&organizerid=" + userid;

    //alert(queryString);

    ajaxRequest.send(queryString);
}