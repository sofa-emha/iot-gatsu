function nama(){

    link=window.location.href;

    d_nama="";
    s_nama=false;
    u_nama=false;

    for(i=0;i<link.length;i++){

        if(link[i]=="&"){
            s_nama=false;
        }

        if(link[i]=="?"){
            u_nama=false;
        }

        if(s_nama){
            d_nama+=link[i];
        }

        if(link[i]=="=" && !u_nama){
            s_nama=true;
            u_nama=true;
        }

    } $("#nama").text(d_nama.charAt(0).toUpperCase() + d_nama.slice(1));

} nama();