<?php
if (!function_exists('wa_link')) {
    /**
     * Generate WhatsApp link from phone number
     *
     * This function formats a phone number to create a WhatsApp web link.
     * It converts numbers starting with '0' to use the '62' country code (Indonesia).
     * Numbers already starting with '62' are left unchanged.
     * Invalid or empty inputs return 'javascript:void(0);'.
     *
     * @param string|null $phone_number The phone number to be formatted
     * @return string WhatsApp link or 'javascript:void(0);' if invalid
     */
    function wa_link($phone_number) {
        // Handle null or non-string input
        if (is_null($phone_number) || !is_string($phone_number) || empty(trim($phone_number))) {
            return 'javascript:void(0);';
        }

        // Remove any non-numeric characters
        $clean_number = preg_replace('/[^0-9]/', '', $phone_number);

        // Check if the cleaned number is empty
        if (empty($clean_number)) {
            return 'javascript:void(0);';
        }

        // Format number: replace leading '0' with '62', leave '62' as is
        if (substr($clean_number, 0, 1) === '0') {
            $clean_number = '62' . substr($clean_number, 1);
        } elseif (substr($clean_number, 0, 2) !== '62') {
            // If not starting with '62' or '0', assume invalid
            return 'javascript:void(0);';
        }

        // Validate number length (minimum 10 digits for Indonesian numbers)
        if (strlen($clean_number) >= 10 && strlen($clean_number) <= 15) {
            return 'https://wa.me/' . $clean_number;
        }

        return 'javascript:void(0);';
    }
}