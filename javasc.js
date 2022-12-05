/*
    var date = new Daet();
    var year = date.getFullYear();
    var month = date.getMonth()+1;
    var todayDate =string(date.getDate()).padstart(2,'0');
    var datePattern = year + '-' + month + '-' + todayDate;
    document.getElementById("hshow").value = datePattern;
    document.write(datePattern);
*/
let dtnshow = document.querySelector('hshow');
let output = document.querySelector('sh');

dtnshow.addEventListener('click', ()=>{
    let today = new Date();

    let month = today.getMonth();
    let year = today.getFullYear();
    let date = today.getDate();

    let current_date = '${month}/${date}/${year}';
})


/*
var d= new Date()
var yr=d.getFullYear();
var month=d.getMonth()+1;
var date=d.getDate();
var c_date=yr+"/"+month+"/"+date;
document.getElementById('f1').value=c_date;*/