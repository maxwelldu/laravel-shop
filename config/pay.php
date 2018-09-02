<?php

return [
    'alipay' => [
        'app_id'         => '2016072900114083',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAru4g+8sOqznn6BiIqR2vcSItPGcKt9aCrwUXJedfVsdeN3PqsqybnDqex9lWO4YLp7NzXn8NLEBdFgWGi1w16t1B9O/0zoUz9Fh/mfI+UJ81gwxjJ+MC+6fbDzOEU3SA77sxt0eAWoyiCw0MdGbjuchlsO2pDsy8f8Jen9hQmWFqxFQ7hw/K7ef6Oeh3TilRO7hokDXzMIxxjT87xILWijJ0LOsXPHLdVdlVQeowJqhh/nPFRTmheebZ940cMEbP/0M5Pb5cVo/PtMvEGZgwBozMxpBtRNP9KUh6UC57XnPNLJ2VYnkqEma4nOx8oPzvq9fNNGyD6JXzNyrBmJd2qQIDAQAB',
        'private_key'    => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkls4/K+gLpKgRaVi7Rr4mDzbfdpmOLsEx0DcdMkRzojnPsOSpYe2xcOZivQJKACDhmAMNStMQ0I+NJdyLVnMOr5Imq9hFlFsackXycPD/Bvile4vG9CYhLeBaZgQWmH8qU+BTYrPAH+7WATFOWJiDa95HxqhxwLXGqILxdqqMKNEF27C/rsixsfNLbmW9+WI0oP6a/WPjupJwmr/QPHWzOJRa0XJrSli9BtzwxlZu2lR/oh4QQPq58cwHpXi4ImyIrdEH8t/a2EA8b6KtpB10QJ4gqoDRdfn1ugBx+t8EaQBWBXQCGdlpQ1RGw5yqvCEsmrMn6H24HX18cnfdAB4pAgMBAAECggEAdQxmaph/8l/Lwm4n0y9xJMHnJS5D79CiRhmsSFAqTA3PjTtgsnDZSDphLVD7YsMKn0SqzvYqeifIHvoRCOqW8pe7mVLWgE0MKRehVNQrH0LG63CcLAYPY8MrbT5lo+gZb3Gs88Aa0wQipwC8Htp0w+mfb24A9ry0yS2nya65hOiROqiKetuyYVr9PCJLgn4/zOHpBMAfqjCx9PEM/Z8lAj88ouJJuB6Uz72Be4PP8vFV/zvtIpO67lXrst1WsitjS6RtoN/A6HpKn9eCTiU/WKLiUKLbQxrLi1XbaVcjuRa6Ya3Mr//MJ82M7WWPINz+smzFBa/NDlu5cTHV2OAAAQKBgQDeAQ6rXm9tkkiImqaoUVAjbyyx7lC6/g694EEOkiym2QH4MgHFOKsSetYa4fvkT8Ui1jAw4NfzRl27BQ6Tgk5oKVkYqSRywWQk7bQGLDlEOJ/QFO9oKfpT48UGFp8sTuAkmeLARTroj0SCJMPStxb068K1ppxKivGwE+asfXhgAQKBgQC9yvrmrcQNvaDHwkFVqY4PXkZaclimzBWFURAg5SUDEz+hNOJ6+bRr/1TEZy8Nv5ypZRrU5ieFGlxU2iKd1FCu5O1DVFXI7mUWxnqyhx8NNLHudgq1ZpM0GFqRSQPRxlhruYq/vvo3h16o2u0M3hBFzZ64dA+mPjBVwUprbXi+KQKBgQCISavgxnuvj5NZ0V8oi6qf5jtRDFWhRiB0rnwh3tjsoOJVpRVzJuPW13QjUsJZmiMSzN0O1KmeHn+iNWuKYP+TcHbS7duDW3gIN6lB9No/KGfrzT5f+w1DfNvSbgbPo6h0r8gFczrD1FghcUKKVH4SY73H2H2wQXY4Oy9siyZgAQKBgBDQYLX7AvlsqUfJL9yU7t7xrS3qH2x3fBiZe+JOKp9BH0v60W2vnYpLzoiv031WUly3dk8SLMIf+boSsSpmWteDtHlYiVkJta702n3idp/G4VSM5Jn5gmUFG1DvtQTqm36/q0kddDFjLsGq04FmUu68LqmMrq49qC6QtzUZN68xAoGAb9RVlRfzwxK8plHydYLojJaeDy4A9Jhv4lZ+zPYBGQTAXHYExW3PXDVPB+0daRPXbqo2q71XuZUqxS/SFTx2bV9BgpWRGS1CVJ/svnIKBMjWBdNZq6qNk94WqI8uBQYwU3ftp7f7+OuG9H8G/ctftIPV6qId5yLVbqZD5SIFmZE=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
