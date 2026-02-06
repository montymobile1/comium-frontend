$(document).ready(function () {
    $('#country-select').select2({
        placeholder: 'Select a country',
    });

    $('#type-select').select2({
        placeholder: 'Select a type',
    });


    selectedCountry = "";
    selectedType = "";

    $('#country-select').on('change', e => {
        const data = $('#country-select').select2('data');
        selectedCountry = data[0]?.text || ""; // Safely access first item
        refreshTable();
    });

    // $('#type-select').on('change', e => {
    //     const data = $('#type-select').select2('data');
    //     selectedType = data[0]?.text || "";
    //     refreshTable();
    // });

    const refreshTable = () => {
        if (selectedCountry?.trim()) {
            $('.table-row').addClass('hidden');
            const normalizedCountry = slugify(selectedCountry);
            $('.row-' + normalizedCountry).removeClass('hidden');
        
            //$('.data-table').addClass('hidden');

            // document.getElementById(selectedType + "-table").classList.remove('hidden');
        }

    }

    function slugify(text) {
        return text
            .normalize("NFD")                   // decompose accents
            .replace(/[\u0300-\u036f]/g, '')    // remove accents
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')        // non-alphanum → dash
            .replace(/^-+|-+$/g, '');           // trim dashes
    }


    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const icon = question.querySelector('.faq-icon');

            // Toggle the answer
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                icon.classList.remove('rotate-180');
                answer.classList.remove('active');
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                icon.classList.add('rotate-180');
                answer.classList.add('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const filterTabs = document.querySelectorAll('.international-roaming-filters [data-filter]');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');
            const newUrl = filter ? `/international-direct-dialing/${filter}` : '/international-direct-dialing';

            // Update URL without reloading
            history.pushState(null, '', newUrl);
        });
    });
});
