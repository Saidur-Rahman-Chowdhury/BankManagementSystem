<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Numbers\V2\RegulatoryCompliance;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class RegulationTest extends HolodeckTestCase {
    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->regulations->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations?IsoCountry=US&EndUserType=business&NumberType=mobile&PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations?IsoCountry=US&EndUserType=business&NumberType=mobile&PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->regulations->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [
                    {
                        "sid": "RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "friendly_name": "Australia: Local - Individual",
                        "iso_country": "AU",
                        "number_type": "local",
                        "end_user_type": "individual",
                        "requirements": {
                            "end_user": [
                                {
                                    "name": "Individual",
                                    "type": "individual",
                                    "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations/individual",
                                    "fields": [
                                        "first_name",
                                        "last_name"
                                    ]
                                }
                            ],
                            "supporting_document": [
                                [
                                    {
                                        "name": "Address",
                                        "type": "document",
                                        "description": "The physical location of the individual or business. Must be within locality or region covered by the phone numbers prefix; a PO Box is not acceptable where a local address is required.",
                                        "accepted_documents": [
                                            {
                                                "name": "Address Validation",
                                                "type": "address",
                                                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/DocumentTypes/address",
                                                "fields": []
                                            }
                                        ]
                                    }
                                ]
                            ]
                        },
                        "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations/RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->regulations->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->numbers->v2->regulatoryCompliance
                                      ->regulations("RNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations/RNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "friendly_name": "Australia: Local - Individual",
                "iso_country": "AU",
                "number_type": "local",
                "end_user_type": "individual",
                "requirements": {
                    "end_user": [
                        {
                            "name": "Individual",
                            "type": "individual",
                            "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations/individual",
                            "fields": [
                                "first_name",
                                "last_name"
                            ]
                        }
                    ],
                    "supporting_document": [
                        [
                            {
                                "name": "Address",
                                "type": "document",
                                "description": "The physical location of the individual or business. Must be within locality or region covered by the phone numbers prefix; a PO Box is not acceptable where a local address is required.",
                                "accepted_documents": [
                                    {
                                        "name": "Address Validation",
                                        "type": "address",
                                        "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/DocumentTypes/address",
                                        "fields": []
                                    }
                                ]
                            }
                        ]
                    ]
                },
                "url": "https://numbers.twilio.com/v2/RegulatoryCompliance/Regulations/RNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->numbers->v2->regulatoryCompliance
                                            ->regulations("RNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }
}