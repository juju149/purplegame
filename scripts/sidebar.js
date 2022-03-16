function opensidebar(){
    if(document.documentElement.clientWidth < 600){
        document.querySelector('.sidebar').style.left = '0'
        document.querySelector('.content').style.opacity = "0.2";
        document.querySelector('.menuicon').style.display = 'none'
        document.querySelector('.closeicon').style.display = 'initial'
    }

}

function closesidebar(){
    if(document.documentElement.clientWidth < 600){
        document.querySelector('.sidebar').style.left = '-82px'
        document.querySelector('.content').style.opacity = "1";
        document.querySelector('.menuicon').style.display = 'initial'
        document.querySelector('.closeicon').style.display = 'none'
    }
}