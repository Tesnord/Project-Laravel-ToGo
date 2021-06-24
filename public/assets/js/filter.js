$(document).ready(function () {
    $('.brands__list-item').click(function () {
        let orderBy = $(this).data('order')

        $.ajax({
            url: "/brands",
            type: "GET",
            data: {
                orderBy: orderBy
            },
            header: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            }
        });
    })
    $('.brands__all-item-link').click(function () {
        let orderBy = $(this).data('order')

        $.ajax({
            url: "/brands",
            type: "GET",
            data: {
                orderBy: orderBy
            },
            header: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
            }
        });
    })
})
