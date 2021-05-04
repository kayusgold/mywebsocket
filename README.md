## About Mywebsocket

Mywebsocket is a laravel websocket server to send out simple message.


## How to use

- Run ```composer install```, ```npm install```, ```php artisan key:generate```
- Serve the websocket server: ```php artisan websocket:serve```

## Connecting external client
This server is configured with app key ```appkey``` so external client must connect using this key.
- You can add more app, following instructions as stated by BeyondCode
- The event created is ```events``` and it is ```public```. You can add more events, check Laravel Doc.

## Flutter Client
- Using ```flutter_pusher_client``` and ```laravel_echo``` flutter packages, flutter app can be connected to Laravel Websocket. 
- Using this app, event is ```RealTimeMessage```, channel ```public``` and event name is ```events```
- The app can listen like this:
    ```dart 
        FlutterPusher pusherClient;
        Echo echo;
        dynamic channel;
        String channelType = "public";
        String channelName = "events";
        String event = "RealTimeMessage";

        //TODO: set up echo and pusherClient
        //connect to the channel
        channel = echo.channel(channelName);
        //listen to the message
        channel.listen(event, (e) {
            print('Channel: $channelName, Event: $event');
            print((e)['message']);
            print("Message: " + (e)['message']);
        });
    ```
Refer to these flutter packages for further assistance especially ```laravel_echo``` package.

## Sending out Messages from the websocket server
- ```php 
    event(new \App\Events\RealTimeMessage("Your message"));
    ```
You can do this from laravel tinker cli ```php artisan tinker``` and run the code above.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

