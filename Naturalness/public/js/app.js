var app = {
        init: function () {
            //targeting the DOM element
            let buttonElement =  document.getElementById('button')
            buttonElement.addEventListener('click', app.handleClickOnButton);
        },
            handleClickOnButton: function() {
                console.log('J\'espère que vous avez bien lu avant de fermer!');
                //when the user click on the closing button
                // it gives an 'inactive' class to the warning window
                document.getElementById('button').className = 'inactive'
        }
}
document.addEventListener('DOMContentLoaded', app.init);
