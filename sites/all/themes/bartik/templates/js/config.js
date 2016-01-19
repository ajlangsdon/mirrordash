var config = {
    lang: 'en',
    time: {
        timeFormat: 12
    },
    weather: {
        //change weather params here:
        //units: metric or imperial
        params: {
            q: 'Chandler, Arizona',
            units: 'metric', // !!!!! This field gets updated dynamically based on "Temperature Format" value
                             // !!!!! $node->field_temperature_format['und'][0]['value']
            // if you want a different lang for the weather that what is set above, change it here
            lang: 'en',
            APPID: 'b53b5800836025a9c6ba18f0e5a1c41a'
        }
    },
    compliments: {
        interval: 30000,
        fadeInterval: 4000,
        morning: [
            'Good morning, handsome!',
            'Enjoy your day!',
            'How was your sleep?'
        ],
        afternoon: [
            'Hello, beauty!',
            'You look sexy!',
            'Looking good today!'
        ],
        evening: [
            'Wow, you look hot!',
            'You look nice!',
            'Hi, sexy!'
        ]
    },
    calendar: {
        maximumEntries: 12,
        url: "https://calendar.google.com/calendar/ical/vkf09a25ob4ncnm6q0dp910grrh593rp%40import.calendar.google.com/public/basic.ics"
    },
    news: {
        feed: 'http://feeds.feedburner.com/cavs_news'
    }
}
