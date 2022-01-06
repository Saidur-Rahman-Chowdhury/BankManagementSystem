<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Marketplace;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Serialize;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class InstalledAddOnTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->marketplace->installedAddOns->create("XBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", True);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = [
            'AvailableAddOnSid' => "XBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
            'AcceptTermsOfService' => Serialize::booleanToString(True),
        ];

        $this->assertRequest(new Request(
            'post',
            'https://preview.twilio.com/marketplace/InstalledAddOns',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "VoiceBase High Accuracy Transcription",
                "description": "Automatic Transcription and Keyword Extract...",
                "configuration": {
                    "bad_words": true
                },
                "unique_name": "voicebase_high_accuracy_transcription_1",
                "date_created": "2016-04-07T23:52:28Z",
                "date_updated": "2016-04-07T23:52:28Z",
                "url": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "extensions": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Extensions",
                    "available_add_on": "https://preview.twilio.com/marketplace/AvailableAddOns/XBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->marketplace->installedAddOns->create("XBXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", True);

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->marketplace->installedAddOns("XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://preview.twilio.com/marketplace/InstalledAddOns/XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->preview->marketplace->installedAddOns("XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->marketplace->installedAddOns("XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/marketplace/InstalledAddOns/XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "VoiceBase High Accuracy Transcription",
                "description": "Automatic Transcription and Keyword Extract...",
                "configuration": {
                    "bad_words": true
                },
                "unique_name": "voicebase_high_accuracy_transcription",
                "date_created": "2016-04-07T23:52:28Z",
                "date_updated": "2016-04-07T23:52:28Z",
                "url": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "extensions": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Extensions",
                    "available_add_on": "https://preview.twilio.com/marketplace/AvailableAddOns/XBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->marketplace->installedAddOns("XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->marketplace->installedAddOns("XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://preview.twilio.com/marketplace/InstalledAddOns/XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testUpdateResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "VoiceBase High Accuracy Transcription",
                "description": "Automatic Transcription and Keyword Extract...",
                "configuration": {
                    "bad_words": true
                },
                "unique_name": "voicebase_high_accuracy_transcription_2",
                "date_created": "2016-04-07T23:52:28Z",
                "date_updated": "2016-04-07T23:52:28Z",
                "url": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "links": {
                    "extensions": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Extensions",
                    "available_add_on": "https://preview.twilio.com/marketplace/AvailableAddOns/XBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->marketplace->installedAddOns("XEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update();

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->marketplace->installedAddOns->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/marketplace/InstalledAddOns'
        ));
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "installed_add_ons": [
                    {
                        "sid": "XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "friendly_name": "VoiceBase High Accuracy Transcription",
                        "description": "Automatic Transcription and Keyword Extract...",
                        "configuration": {
                            "bad_words": true
                        },
                        "unique_name": "voicebase_high_accuracy_transcription",
                        "date_created": "2016-04-07T23:52:28Z",
                        "date_updated": "2016-04-07T23:52:28Z",
                        "url": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "links": {
                            "extensions": "https://preview.twilio.com/marketplace/InstalledAddOns/XEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Extensions",
                            "available_add_on": "https://preview.twilio.com/marketplace/AvailableAddOns/XBaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                        }
                    }
                ],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://preview.twilio.com/marketplace/InstalledAddOns?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://preview.twilio.com/marketplace/InstalledAddOns?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "installed_add_ons"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->marketplace->installedAddOns->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "installed_add_ons": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://preview.twilio.com/marketplace/InstalledAddOns?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://preview.twilio.com/marketplace/InstalledAddOns?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "installed_add_ons"
                }
            }
            '
        ));

        $actual = $this->twilio->preview->marketplace->installedAddOns->read();

        $this->assertNotNull($actual);
    }
}