
const list = document.querySelectorAll('.navigation li');
const input = document.querySelector('input[type="file"]');

function activeLink() {
    list.forEach((item) => {
        item.classList.remove('hovered');
    });

    this.classList.add('hovered');
}

list.forEach((item) => {
    item.addEventListener('mouseover', activeLink);
});

const toggle = document.querySelector('.toggle');
const navigation = document.querySelector('.navigation');
const main = document.querySelector('.main');

toggle.onclick = function () {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
};

input.addEventListener('change', () => {
    const file = input.files[0];

    const url = URL.createObjectURL(file);

    const previewImage = document.querySelector('#preview-image');
    previewImage.src = url;
    previewImage.style.display = 'block';
    previewImage.classList.add('preview-image');

    const deleteButton = document.querySelector('#delete-image');
    const changeButton = document.querySelector('#change-image');
    deleteButton.style.display = 'block';
    changeButton.style.display = 'block';

    deleteButton.addEventListener('click', () => {
        previewImage.src = '#';
        previewImage.style.display = 'none';
        deleteButton.style.display = 'none';
        changeButton.style.display = 'none';
        input.value = null;
    });

    changeButton.addEventListener('click', () => {
        input.click();
    });
});
