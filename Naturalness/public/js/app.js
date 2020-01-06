var app = {
        init: function () {
            //ciblage de mon élément du DOM
            let buttonElement =  document.getElementById('button')
            buttonElement.addEventListener('click', app.handleClickOnButton);
        },   
            handleClickOnButton: function() {
                console.log('click !!!');
                document.getElementById('button').className = 'inactive'
        }
}
document.addEventListener('DOMContentLoaded', app.init);
