var app = {
        init: function () {
            //ciblage de mon élément du DOM
            let buttonElement =  document.getElementById('button')
            buttonElement.addEventListener('click', app.handleClickOnButton);
        },
            handleClickOnButton: function() {
                console.log('J\'espère que vous avez bien lu avant de fermer!');
                document.getElementById('button').className = 'inactive'
        }
}
document.addEventListener('DOMContentLoaded', app.init);
