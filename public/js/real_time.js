$(document).ready(function() {
    $(document).on('click', '#done', function() {

        var id = $(this).data('id');

        var hereElement = $('.class' + id.toString());

        var testElement = $('.done');

        
        var newButtonHtml = '<button type="button" class="btn btn-warning" data-id="'+id+'" id="still">Still</button>';
        
        var buttonElement = $('.class' + id.toString() + ' #done').replaceWith(newButtonHtml);



        hereElement.prependTo(testElement);


        console.log(id,'entered');
        $.ajax({
            url: '/dev/task_done', // Replace with the actual URL of your server-side script
            method: 'POST',
            data: { id: id , _token: $('meta[name="csrf-token"]').attr('content') },
            success: function(response) {
                console.log("noice");
            },
            error: function(xhr, status, error) {
                console.log("error");

            }
        });
    });


        $(document).on('click', '#still', function() {

        var id = $(this).data('id');
        

        var hereElement = $('.class' + id.toString());

        var testElement = $('.todo');

        
        var newButtonHtml = ' <button type="button" class="btn btn-success" id="done" data-id="'+id+'">Done</button>';
        
        var buttonElement = $('.class' + id.toString() + ' #still').replaceWith(newButtonHtml);


        hereElement.prependTo(testElement);
        
        console.log(id,'still');
        $.ajax({
            url: '/dev/task_still', 
            method: 'POST',
            data: { id: id , _token: $('meta[name="csrf-token"]').attr('content') },
            success: function(response) {
                console.log("noice");

            },
            error: function(xhr, status, error) {
                console.log("error");

            }
        });
    });

    $(document).on('click', '#remove', function() {
        var id = $(this).data('id');
        

        var hereElement = $('.class' + id.toString());
        hereElement.hide();

        console.log(id,'still');
        $.ajax({
            url: '/dev/task_remove', // Replace with the actual URL of your server-side script
            method: 'POST',
            data: { id: id , _token: $('meta[name="csrf-token"]').attr('content') },
            success: function(response) {
                console.log("noice");

            },
            error: function(xhr, status, error) {
                console.log("error");
            }
        });
    });

});

