function addPermission() {
    var newPermName = $('#newPermissionName').val();
    var newPermVal = $('#newPermissionVal').prop('checked');
    //alert(newPermName + newPermVal);
    var insHTML = "<tr>\n";
    insHTML += "<td class=\"col m10 l10 s10\">" + newPermName + "</td>\n";
    insHTML += "<td class=\"col m2 l2 s2\">\n";
    insHTML += "<input type=\"checkbox\" ";
    insHTML += (newPermVal) ? ("checked") : ("");
    insHTML += " class=\"permission\" id=\"" + newPermName + "\"/>\n";
    insHTML += "<label for=\"" + newPermName + "\"></label>\n";
    insHTML += "</td>\n</tr>\n";
    var isPermExists = false;
    $(".permission").each(
        function (ind, val) {
            //console.log("Perm id: " + $(val).prop("id") + "\nNew ID: " + newPermName + "\n");
            if ($(val).prop("id") == newPermName) {
                isPermExists = true;
            }
        }
    );
    if (!isPermExists) {
        $('#permissions').append(insHTML);
    }
    $('#newPermissionName').val("");


};

function sendPermissions() {

    //TODO: Правильная обработка ответа сервера
    var id = $('#roleID').html();
    var perms = new Object();
    $(".permission").each(
        function (ind, val) {
            //console.log("Perm id: " + $(val).prop("id") + "\nNew ID: " + newPermName + "\n");
            perms[$(val).prop("id")] = $(val).prop("checked") ? true : false;
        }
    );
    console.log("ID: " + id + "Perms: " + perms);
    $.ajax({
        type: "GET",
        url: "/json/update/role/" + id,
        dataType: 'JSON',

        data: {
            id: id,
            perms: perms,
        },

        //beforesend: $('.content').html('Загрузка'),

        success: function (data, code) {
            $('#status').removeClass('hide');

            if (code == "success") {
                console.log(data);

                //JData = JSON.parse(data);
                $('#status').html(data['status']); // запрос успешно прошел
            } else {
                $('#status').html("При отправлении произошла ошибка. Код " + code + "."); // возникла ошибка, возвращаем код ошибки
            }
            setTimeout(function () {
                $('#status').addClass('hide');
            }, 10000);
        },

        error: function (xhr, str) {
            $('#status').removeClass('hide');

            $('#status').html('Критическая ошибка');
            setTimeout(function () {
                $('#status').addClass('hide');
            }, 10000);
        },

        complete: function (data, code) {
            console.log("DATA: \"" + data + "\", CODE: \"" + code + "\"");
            //$('#status').removeClass('hide');

            //$('#status').html("При отправлении произошла ошибка."); // возникла ошибка, возвращаем код ошибки
            //$('#something').hide(); //например, спрятали какую-то кнопочку, которая вызывала запрос
            /*setTimeout(function () {
                $('#status').addClass('hide');
            }, 10000);*/
        },
        statusCode: {
            200: function (data) {
                var response = data.responseText;

                //console.log("Ответ сервера: \"" + response + "\"");
            },
        },

    });


}

function putRoleToTable(id, name, slug, permissions) {
    var toTab = "<tr>\n";
    toTab += "<td class=\"col m1 l1 s1\">";
    toTab += id;
    toTab += "</td>\n";
    toTab += "<td class=\"col m3 l3 s3\">";
    toTab += "<a href=\"/settings/roles/edit/" + id + "\">"
    toTab += name;
    toTab += "</td>\n";
    toTab += "<td class=\"col m4 l4 s4\">";
    toTab += slug;
    toTab += "</td>";
    toTab += "<td class=\"col m4 l4 s4\">";
    var keys = permissions.keys();
    if (keys.length > 0) {
        keys.forEach(
            function (item, i, arr) {
                if (permissions[item]) {
                    toTab += item + "<br>";
                }
            }
        );
    }
    toTab += "</td>\n";
    toTab += "</tr>\n";
    $("#roles").append(toTab);


}

function createRole() {
//TODO: Правильная обработка ответа сервера
    var name = $('#newRoleName').val();
    var slug = $('#newRoleSlug').val();

    //console.log("ID: " + id + "Perms: " + perms);
    $.ajax({
        type: "GET",
        url: "/json/create/role/",
        dataType: 'JSON',

        data: {
            name: name,
            slug: slug,
        },

        success: function (data, code) {
            $('#status').removeClass('hide');

            if (code == "success") {
                console.log(data);

                //JData = JSON.parse(data);
                $('#status').html(data['status']); // запрос успешно прошел
                putRoleToTable(data['id'], data['name'], data['slug'], data['perm']);
            } else {
                $('#status').html("При отправлении произошла ошибка. Код " + code + "."); // возникла ошибка, возвращаем код ошибки
            }
            setTimeout(function () {
                $('#status').addClass('hide');
            }, 10000);
        },
        complete: function (data, code) {
            console.log("Complete");
        },
        error: function (xhr, str) {
            $('#status').removeClass('hide');

            $('#status').html('Критическая ошибка');
            setTimeout(function () {
                $('#status').addClass('hide');
            }, 10000);
        },

    });
}

function assignRole(role_slug, user_id) {

}

function listAssignableRoles() {
    var form = "<select id=\"RoleList\" class='col s12 m12 l12 center'>\n";
    form += "<option value=\"\" disabled selected>Выберите роль</option>\n";
    form += "<option value=\"JS_ROLE\"\n>JS ROLE</option>";
    form += "</select>";
    form +="<label for='RoleList'>Добавление роли</label>";
    $("#RoleForm").html(form);

}


$(document).ready(function () {

    $('.fillSlugs').click(function () {
        listAssignableRoles()
    });


})

$(document).ready(function () {


    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 200, // Transition out duration
            startingTop: '4%', // Starting top style attribute
            endingTop: '10%', // Ending top style attribute
            ready: function (modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.

            },
            complete: function () {
            } // Callback for Modal close
        }
    );
    $("#addNewPerm").click(addPermission);
    $("#sendPerms").click(sendPermissions);
    $("#addNewRole").click(createRole);

});


$(document).ready(function () {
    $('select').material_select();
});
