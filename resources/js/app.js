require('./bootstrap');

import Echo from 'laravel-echo';

window.io = require('socket.io-client');

window._echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
    url: '/auth',
    success: function (data) {
        let user = data.user;
        let channel = 'user.' + user.id;
        console.log(channel);
        _echo.private(channel)
            .listen('.Order', function (e) {
                console.log(e);
            });
    }
});
$('#demo').on('click', function (e) {
    e.preventDefault();
    $.get('/order');
});
