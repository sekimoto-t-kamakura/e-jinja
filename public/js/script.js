document.addEventListener('DOMContentLoaded', function() {
    const areaLinks = document.querySelectorAll('.container__area');
    const prefectureList = document.getElementById('prefecture-list');
    const prefecturesDiv = document.getElementById('prefectures');
    const backButton = document.getElementById('back-button');
    const areaList = document.getElementById('area-list');

    const modalOverlay = document.getElementById('modal-overlay');
    const modalClose = document.getElementById('modal-close');
    const modalTitle = document.getElementById('modal-title');
    const modalBody = document.getElementById('modal-body');

    areaLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            let prefectures, cities;
            try {
                prefectures = JSON.parse(this.getAttribute('data-prefectures'));
                cities = JSON.parse(this.getAttribute('data-cities'));
            } catch (error) {
                return;
            }

            areaList.style.display = 'none';
            backButton.style.display = 'flex';

            prefecturesDiv.innerHTML = '';
            prefectures.forEach(prefecture => {
                const a = document.createElement('a');
                a.href = "javascript:void(0);";
                a.setAttribute('data-prefecture-id', prefecture.id);
                a.textContent = prefecture.name;
                a.classList.add('container__prefecture');
                const img = document.createElement('img');
                img.src = "img/material-icon/right-bow.svg";
                img.alt = "右矢印";
                img.classList.add('container__right-bow');

                a.appendChild(img);
                prefecturesDiv.appendChild(a);

                a.addEventListener('click', function() {
                    const prefectureName = this.textContent;
                    const prefectureId = this.getAttribute('data-prefecture-id');
                    const relatedCities = cities.filter(city => String(city.prefecture_id) === String(prefectureId));

                    modalTitle.textContent = `${prefectureName}の市区町村`;
                    if (relatedCities.length > 0) {
                        modalBody.innerHTML = '<ul>' +
                            relatedCities.map(city => `<li class ='modal-list'><a class ='modal-link' data-city-id="${city.id}" href="/city/${city.id}" >${city.name}</a></li>`).join('') +
                            '</ul>';
                    } else {
                        modalBody.textContent = '該当する市区町村がありません。';
                    }

                    modalOverlay.style.display = 'flex';
                });
            });

            prefectureList.style.display = 'block';
        });
    });

    backButton.addEventListener('click', function() {
        prefectureList.style.display = 'none';
        backButton.style.display = 'none';
        areaList.style.display = 'grid';
    });

    modalClose.addEventListener('click', function() {
        modalOverlay.style.display = 'none';
    });

    modalOverlay.addEventListener('click', function(event) {
        if (event.target === modalOverlay) {
            modalOverlay.style.display = 'none';
        }
    });
});
