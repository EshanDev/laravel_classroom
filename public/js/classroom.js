window.onload = function(){
    let wrapper = document.getElementById('wrapperContainer'),
        sidebar = document.getElementById('SidebarContainer'),
        container = document.getElementById('MainContainer'),
        toggle = document.getElementById('ToggleBar');

        toggle.addEventListener('click', function(){
            wrapper.classList.toggle('isOpen');
            sidebar.classList.toggle('isClose');
            container.classList.toggle('isOpen');
        });


}