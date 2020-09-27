/**
 * Created by DJJ on 2017/4/13.
 */
/**
 * Created by DJJ on 2016/10/20.
 */
var xmlhttp;

function Init_HttpRequestObj(){
    if(window.ActiveXObject){
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }else if(window.XMLHttpRequest){
        xmlhttp=new XMLHttpRequest();
    }
}

function $_(id)
{
    return document.getElementById(id);
}

function handle(){

    Init_HttpRequestObj();
    //var content=document.myform.user.value;
    xmlhttp.open("GET","ajax_handler.php?name="+"11",true);
    xmlhttp.onreadystatechange=getResponce;
    xmlhttp.send(null);
}


function getResponce(){
    if(xmlhttp.status==200) {
        var responce = xmlhttp.responseText;
        //$("Lianjie").innerHTML = responce;
        $_("sign_pic").innerHTML="已成功签到";
    }

}
