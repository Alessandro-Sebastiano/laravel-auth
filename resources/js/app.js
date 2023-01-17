import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);




const deleteButton = document.getElementById('my-delete-button');
const form = document.getElementById('delete-form');

deleteButton.addEventListener('click', function () {
    form.submit();
})

