<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * InvoicePlane
 *
 * @author		InvoicePlane Developers & Contributors
 * @copyright	Copyright (c) 2012 - 2018 InvoicePlane.com
 * @license		https://invoiceplane.com/license.txt
 * @link		https://invoiceplane.com
 */

/**
 * @param object $client
 * @return string
 */
function format_client($client, $fao = true)
{
    if (is_company($client))
    {
        if ($fao)
        {
            return $client->client_name . " (FAO: " .format_client_fao($client) . ")";
        }
        else
        {
            return $client->client_name;
        }
    }
    else
    {
        if ($client->client_surname != "") {
            return $client->client_name . " " . $client->client_surname;
        }

        return $client->client_name;
    }
}

function format_client_fao($client)
{
    if (is_company($client))
    {
        return $client->client_surname;
    }
    else
    {
        return format_client($client);
    }
}

function format_client_company_name($client)
{
    return format_client($client, false);
}

function format_client_contact_name($client)
{
    if (is_company($client))
    {
        return explode(' ', $client->client_surname)[0];
    }
    else
    {
        return $client->client_name;
    }
}

function format_client_contact_surname($client)
{
    if (is_company($client))
    {
        return explode(' ', $client->client_surname)[1];
    }
    else
    {
        return $client->client_surname;
    }
}

function is_company($client)
{
    if ($client->client_surname != "")
    {
       if (strpbrk($client->client_surname, ' ') !== false)
       {
          return true;
       }
    }
}

/**
 * @param string $gender
 * @return string
 */
function format_gender($gender)
{
    if ($gender == 0) {
        return trans('gender_male');
    }

    if ($gender == 1) {
        return trans('gender_female');
    }

    return trans('gender_other');
}
