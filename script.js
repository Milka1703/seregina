//Загрузка html-документа, перед выполнеием скрипта
document.addEventListener("DOMContentLoaded", function() {
    //инициализируем/объявим/создадим переменные
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');//Подключение всех слайдов
    const totalSlides = slides.length; //Общее количество слайдов

    //Функция для отображения определенного слайда по его индексу
    function showSlide(index){ //создаем функцию showSlide, которая принимает аргумент index
        slides.forEach((slide)=>{//работаем со значениями записанными в переменную slides с помощью перебора значений циклом forEach, указываем что перебираем каждый slide по отдельности
            slide.style.display = 'none';//скрываем все слайды, которые неактивные
        });

        slides[index].style.display = 'block'; //отображение выбранного слайда
    }

    function nextSlide(){
        currentSlide = (currentSlide + 1) % totalSlides; //переход к следующему слайду
        showSlide(currentSlide);
    }

    function prevSlide(){ 
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; //Переход к предыдущему слайду 
        showSlide(currentSlide); 
    } 
        
    showSlide(currentSlide); //показываем первый слайд при загрузке страницы

    document.getElementById('nextBtn').addEventListener('click', nextSlide);
    document.getElementById('prevBtn').addEventListener('click', prevSlide);
    
});