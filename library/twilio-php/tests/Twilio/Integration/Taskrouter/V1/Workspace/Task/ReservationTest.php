<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Taskrouter\V1\Workspace\Task;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ReservationTest extends HolodeckTestCase {
    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->reservations->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://taskrouter.twilio.com/v1/Workspaces/WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Tasks/WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Reservations'
        ));
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations?PageSize=50&Page=0",
                    "key": "reservations",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations?PageSize=50&Page=0"
                },
                "reservations": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2014-05-14T10:50:02Z",
                        "date_updated": "2014-05-15T16:03:42Z",
                        "links": {
                            "task": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                            "worker": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Workers/WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                            "workspace": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                        },
                        "reservation_status": "accepted",
                        "sid": "WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "task_sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations/WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "worker_name": "Doug",
                        "worker_sid": "WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->reservations->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations?PageSize=50&Page=0",
                    "key": "reservations",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations?PageSize=50&Page=0"
                },
                "reservations": []
            }
            '
        ));

        $actual = $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->reservations->read();

        $this->assertNotNull($actual);
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->reservations("WRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://taskrouter.twilio.com/v1/Workspaces/WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Tasks/WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Reservations/WRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2014-05-14T10:50:02Z",
                "date_updated": "2014-05-15T16:03:42Z",
                "links": {
                    "task": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "worker": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Workers/WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "workspace": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                },
                "reservation_status": "accepted",
                "sid": "WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "task_sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations/WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "worker_name": "Doug",
                "worker_sid": "WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->reservations("WRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        $options = ['ifMatch' => "if_match", ];

        try {
            $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                         ->reservations("WRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update($options);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $headers = ['If-Match' => "if_match", ];

        $this->assertRequest(new Request(
            'post',
            'https://taskrouter.twilio.com/v1/Workspaces/WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Tasks/WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Reservations/WRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
            [],
            [],
            $headers
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2014-05-14T10:50:02Z",
                "date_updated": "2014-05-15T16:03:42Z",
                "links": {
                    "task": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "worker": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Workers/WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "workspace": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                },
                "reservation_status": "accepted",
                "sid": "WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "task_sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations/WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "worker_name": "Doug",
                "worker_sid": "WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->reservations("WRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testUpdateSuperviseInstructionResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2014-05-14T10:50:02Z",
                "date_updated": "2014-05-15T16:03:42Z",
                "links": {
                    "task": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "worker": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Workers/WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "workspace": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                },
                "reservation_status": "accepted",
                "sid": "WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "task_sid": "WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "url": "https://taskrouter.twilio.com/v1/Workspaces/WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Tasks/WTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Reservations/WRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "worker_name": "Doug",
                "worker_sid": "WKaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->taskrouter->v1->workspaces("WSXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->tasks("WTXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                               ->reservations("WRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }
}