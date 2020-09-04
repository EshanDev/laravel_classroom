window.onload = function() {
    let wrapper = document.getElementById("wrapperContainer"),
        sidebar = document.getElementById("SidebarContainer"),
        container = document.getElementById("MainContainer"),
        toggle = document.getElementById("ToggleBar");

    toggle.addEventListener("click", function() {
        wrapper.classList.toggle("isOpen");
        sidebar.classList.toggle("isClose");
        container.classList.toggle("isOpen");
        this.classList.toggle('change');
        this.classList.toggle('x');
    });

    // window.addEventListener("resize", function() {
    //     var w = window.innerWidth;
    //     var h = window.innerHeight;

    //     let toggles = document.getElementById("ToggleBar");

    //     // document.getElementById("textshow").innerHTML =
    //     //     "Width: " + w + "<br>Height: " + h;

    //     if(window.innerWidth < 768){
    //         toggles.classList.add('x');
    //     }
    // });


    // if(window.innerWidth < 768){
    //     sidebar.classList.add('isClose')
    //     wrapper.classList.remove('isOpen')
    //     container.classList.remove('isOpen')
    // }

};

$(function() {
    $('.Slink-item').click(function(){
        $('.Slink-item').removeClass('active');
        $(this).addClass('active');
    });
})