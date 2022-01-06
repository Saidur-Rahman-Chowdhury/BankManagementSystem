<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Notify\V1\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class NotificationTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->notify->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->notifications->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://notify.twilio.com/v1/Services/ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Notifications'
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "NTb8021351170b4e1286adaac3fdd6d082",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "IS699b53e02da45a1ba9d13b7d7d2766af",
                "date_created": "2016-03-24T23:42:28Z",
                "identities": [
                    "jing"
                ],
                "tags": [],
                "segments": [],
                "priority": "high",
                "ttl": 2419200,
                "title": "test",
                "body": "body",
                "sound": null,
                "action": null,
                "data": null,
                "apn": null,
                "fcm": null,
                "gcm": null,
                "sms": null,
                "facebook_messenger": null,
                "alexa": null
            }
            '
        ));

        $actual = $this->twilio->notify->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->notifications->create();

        $this->assertNotNull($actual);
    }

    public function testCreateDirectNotificationResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "NTb8021351170b4e1286adaac3fdd6d082",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "IS699b53e02da45a1ba9d13b7d7d2766af",
                "date_created": "2016-03-24T23:42:28Z",
                "identities": [],
                "tags": [],
                "segments": [],
                "priority": "high",
                "ttl": 2419200,
                "title": null,
                "body": "body",
                "sound": null,
                "action": null,
                "data": null,
                "apn": null,
                "fcm": null,
                "gcm": null,
                "sms": null,
                "facebook_messenger": null,
                "alexa": null
            }
            '
        ));

        $actual = $this->twilio->notify->v1->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->notifications->create();

        $this->assertNotNull($actual);
    }
}