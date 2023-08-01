<?php
$params = [
    'subid1',
    'subid2',
    'subid3',
    'subid4',
    'fb',
    'tt'
];
$params_cleaned = [];

foreach($params as $param) {
    $params_cleaned[$param] = !empty($_REQUEST[$param]) ? htmlspecialchars(strip_tags($_REQUEST[$param])) : '';
}
?>
<script type="text/javascript">
    var forms = document.querySelectorAll('form');
    var aim = typeof(aim) !== 'undefined' ? aim : 1;
    var pastes = [];

    setupForms();

    function setHiddenInput(form, name, value) {
        value = value || '';
        var input = form.querySelector('input[name=' + name + ']');

        if (input === null) {
            input = document.createElement('input');

            input.name = name;
            input.type = 'hidden';
            input.value = value;

            form.appendChild(input);
        } else {
            if(input.value.length === 0) {
                input.value = value;
            }
        }
    }

    function setupForms() {
        forms.forEach(function(form, i) {
            form.addEventListener("submit", leadtradeFormSubmit);
            form.action = 'success/success.php';

            <?php foreach($params as $param) {
                echo "setHiddenInput(form, '$param', '{$params_cleaned[$param]}'); ";
            } ?>
        });
    }

    function blockButtons(form) {
        var button = form.querySelector('button');
        var input = form.querySelector('input[type=submit]');

        if (button) button.disabled = true;
        if (input) input.disabled = true;
    }

    function unblockButtons(form) {
        var button = form.querySelector('button');
        var input = form.querySelector('input[type=submit]');

        if (button) button.disabled = false;
        if (input) input.disabled = false;
    }

    function leadtradeSubmitClick(event, form) {
        if (leadtradeFormSubmit(event, form)) {
            form.submit();
        }
    }

    function leadtradeFormSubmit(event, form) {
        form = form || this;

        blockButtons(form);

        // Get phone
        var phone_input = form.querySelector("input[name=phone]");
        if(phone_input) {
            var phone = phone_input.value;
        } else {
            event.preventDefault();
            unblockButtons(form);
            return false;
        }

        // Get aim
        var aim_select = form.querySelector("[name=aim]");
        if(aim_select) {
            aim = aim_select.value;
        }

        var minimum = 10;
        var phoneErrorMsg = 'Необходимо ввести номер телефона, минимум 10 цифр';
        var addressErrorMsg = 'Укажите корретный адрес.';

        if(aim_select && aim_select.tagName === 'SELECT') {
            var selected_country = aim_select.selectedOptions[0].innerHTML;

            if (!/[а-яА-Я]/.test(selected_country)) {
                minimum = 9;
                phoneErrorMsg = 'Please enter 9 digits minimum (without country code) or 11-12 digits (with country code)';
                addressErrorMsg = 'Specify correct address.';
            }

        }

        if(phone.length < minimum) {
            alert(phoneErrorMsg);
            event.preventDefault();
            unblockButtons(form);
            return false;
        }

        // Get address
        var address_select = form.querySelector("[name=address]");
        if (address_select && address_select.value.length <= 0) {
            alert(addressErrorMsg);
            event.preventDefault();
            unblockButtons(form);
            return false;
        }

        // Paste
        var pastes_input = form.querySelector("[name=pastes]");
        if(!pastes_input) {
            pastes_input = document.createElement('input');
            pastes_input.type = 'hidden';
            pastes_input.name = 'pastes';

            form.appendChild(pastes_input);
        }

        pastes_input.value = JSON.stringify(pastes);

        return true;
    }

    function onPaste(e) {
        var tagName = e.target.tagName;
        var name = e.target.getAttribute('name');
        pastes.push({
            name: name,
            tag: tagName
        });
    }

    $(document).ready(function() {
        upd_int();

        $('.countryselect').change( function() {
            changeCountry =  $(this).val();

            $('.countryselect option[value='+changeCountry+']').prop("selected", true);

            upd_int();
        });

        $('.mm_button').each(function(index, elem) {
            $(elem).prop('type', 'submit');
        });

    });


    function upd_int() {
        curs  = $('.countryselect').children(":selected").val();

        producInfo = $jsonData[curs];

        producInfo.productsum = Math.round(producInfo.productsum * 10) / 10;
        producInfo.delivery = Math.round(producInfo.delivery * 10) / 10;
        producInfo.totalsum = Math.round(producInfo.totalsum * 10) / 10;
        producInfo.oldproductsum = Math.round(producInfo.oldproductsum * 10) / 10;

        $("input[name=productsum]").val(producInfo.productsum + producInfo.currency).trigger('change');
        $(".productsum").html(producInfo.productsum + producInfo.currency);

        $("input[name=delivery]").val(producInfo.delivery + producInfo.currency).trigger('change');
        $(".delivery").html(producInfo.delivery + producInfo.currency);

        $("input[name=totalsum]").val(producInfo.totalsum + producInfo.currency).trigger('change');
        $(".totalsum").html(producInfo.totalsum + producInfo.currency);

        $(".oldproductsum").html(producInfo.oldproductsum + producInfo.currency);
    }
</script>