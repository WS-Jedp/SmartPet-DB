$(document).ready(function(){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    // Create type of user
    $('#typeUserForm').submit(e=>{
        e.preventDefault();
        var allData = new FormData();
        let formType = $('#typeUserForm').serializeArray();
        formType.forEach(e=>{
            allData.append(e.name, e.value)
        })
        $.ajax({
            method: 'POST',
            url: '/users/type/create',
            data: allData,
            contentType: false,
            cache: false,
            processData: false,
            success: data=>{
                console.log(data);
                $('#typeUserForm input[type="text"]').val('');
                $('#alertSuccess').removeClass('d-none');
                $('#titleAlert').text(data.message);
            }
        })
    });

    // Update typeUser
    $('#editTypeUserForm').submit(e=>{
       
        e.preventDefault();
        var allDataUpdate = new FormData();
        let updateFormType = $('#editTypeUserForm').serializeArray();
        updateFormType.forEach(e=>{
            allDataUpdate.append(e.name, e.value)
        }); 
        $.ajax({
            method: 'POST',
            url: '/users/type/update',
            data: allDataUpdate,
            contentType: false,
            cache: false,
            processData: false,
            success: (data)=>{
                console.log(data);
                $('#alertSuccess').removeClass('d-none');
                $('#titleAlert').text(data.message);
            }
        })
    });



    // Create Subscription
    $('#formSubscriptionCreate').submit(e=>{
        e.preventDefault();
        var dataNewSubscription = new FormData;
        let formSubscription = $('#formSubscriptionCreate').serializeArray();
        formSubscription.forEach(e=>{
            dataNewSubscription.append(e.name, e.value);
        });

        $.ajax({
            method: 'POST',
            url: '/subscriptions/create',
            data: dataNewSubscription,
            contentType: false,
            cache: false,
            processData: false,
            success: data=>{
                console.log(data)
                $('#formSubscriptionCreate input[type="text"]').val('');
                $('#formSubscriptionCreate input[type="number"]').val('');
                $('#alertSuccess').removeClass('d-none');
                $('#titleAlert').text(data.message);
            }
        })
    })

    // Edit Subscription
    $('#formSubscriptionEdit').submit(e=>{
        e.preventDefault();
        var dataSubscriptionEdit = new FormData;
        let formSubscriptionEdit = $('#formSubscriptionEdit').serializeArray();
        formSubscriptionEdit.forEach(e=>{
            dataSubscriptionEdit.append(e.name, e.value)
        });

    $.ajax({
        method: 'POST',
        url: '/subscriptions/edit',
        data: dataSubscriptionEdit,
        contentType: false,
        cache: false,
        processData: false,
        success: data=>{
            console.log(data);
            $('#alertSuccess').removeClass('d-none');
            $('#titleAlert').text('la subscripcion ha sido editada!')
        }
    })
    });

});


function send_id(id){
    $("#id_btn").val(id)
}

// Delete type user
function drop_user(id){
    $.ajax({
        type: "get",
        url:  `/users/type/delete/${id}`,
        dataType: "json",
        success: function (response) {
            console.log(response)
            location.reload();
        }
    });
}

// Delete subscription
function drop_subscription(id){
    $.ajax({
        type: "get",
        url:  `/users/subscription/delete/${id}`,
        dataType: "json",
        success: function (response) {
            console.log(response)
            location.reload();
        }
    });
}