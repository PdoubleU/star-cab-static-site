import $ from 'jquery';
import { showModal } from './show_modal';
import { showAlert } from './show_alert';

const $SUBMIT = $('main');

String.prototype.stripHTML = function () {
    let reTag = /<(?:.|\s)*?>/g;
    return this.replace(reTag, "");
};

export function sentData(e) {
    e.preventDefault();
    let data = $('.contact_form').serialize();
    const $FNAME = $('#fname').val().stripHTML();
    const $EMAIL_ONE = $('#email').val().stripHTML();
    const $EMAIL_TWO = $('#confirm_email').val().stripHTML();
    const $MSG = $('#message').val().stripHTML();
    //below regular expersion test the email:
    const $REG = /^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$/;

    if ($FNAME === '') {
        showAlert('.name');
        $('#fname').css({'border-color': 'red', 'border-width': '2px'});
        return;
    }
    else if ($MSG === '') {
        showAlert('.msg');
        $('#message').css({'border-color': 'red', 'border-width': '2px'});
        return;
    }
    else if ($EMAIL_ONE !== $EMAIL_TWO || $EMAIL_ONE === '') {
        showAlert('.email');
        $('#email').css({'border-color': 'red', 'border-width': '2px'});
        $('#confirm_email').css({'border-color': 'red', 'border-width': '2px'});
        return;
    }
    else if ($REG.test($EMAIL_TWO)) {
        $.post('./php/action_page.php', data)
        .done(function() {
            showModal(`${$FNAME}, <br/> formularz został wysłany. <br/><br/>
                Skontaktujemy się z tobą  w ciągu 24 godzin. <br/><br/>
                Dziękujęmy!`);
                $('#fname').val('');
                $('#email').val('');
                $('#confirm_email').val('');
                $('#message').val('');})
        .fail(function(){
            showModal(`${$FNAME}, <br/> coś poszło nie tak. <br/><br/>
                Spróbuj ponownie lub napisz bezpośrednio na nasz adres email: <br/>
                info@starcab.wroclaw.pl`)})
            return;
    }
};

$SUBMIT.submit(sentData);