function addLanguage(whichLanguage) {
    var newLanguage = document.createElement('div');
    if (whichLanguage == 'human-language') {
        var languages = document.getElementById('human-languages');
        var langText = 'human-language';

        newLanguage.innerHTML =
            '<div class="language"> ' +
                '<input type="text" name="' + langText + '-name[]"/>' +
                '<select name="human-language-comprehension[]" id="comprehension" required="true">'+
                '<option value="default" disabled selected>-Comprehension-</option>' +
                '<option value="beginner">Beginner</option>' +
                '<option value="intermediate">Intermediate</option>' +
                '<option value="advanced">Advanced</option>' +
                '</select>' +
                '<select name="human-language-reading[]" id="reading" required="true">' +
                '<option value="default" disabled selected>-Reading-</option>' +
                '<option value="beginner">Beginner</option>' +
                '<option value="intermediate">Intermediate</option>' +
                '<option value="advanced">Advanced</option>' +
                ' </select>' +
                ' <select name="human-language-writing[]" id="writing">' +
                '<option value="default" disabled selected required="true">-Writing-</option>' +
                ' <option value="beginner">Beginner</option>' +
                '<option value="intermediate">Intermediate</option>'+
                '<option value="advanced">Advanced</option>'+
                '</select>' +
                '</div>';
    } else if (whichLanguage == 'computer-language') {
        var languages = document.getElementById('computer-languages');
        var langText = 'computer-language';

        newLanguage.innerHTML =
            '<div class="language"> ' +
                '<input type="text" name="' + langText + '-name[]"/>' +
                '<select name="' + langText + '-level[]">' +
                '<option value="beginner">Beginner</option>' +
                '<option value="programmer">Programmer</option>' +
                '<option value="ninja">Ninja</option>' +
                '</select>' +
                '</div>';
    }

    languages.appendChild(newLanguage);
}

function removeLanguage(whichLanguage) {
    if (whichLanguage == 'human-language') {
        var languages = document.getElementById('human-languages');
    } else if (whichLanguage == 'computer-language') {
        var languages = document.getElementById('computer-languages');
    }
    languages.removeChild(languages.lastChild);
}
addLanguage('human-language');
addLanguage('computer-language');