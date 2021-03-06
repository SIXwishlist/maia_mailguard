<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     * All rights reserved.
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    // Menu items
    $lang['menu_welcome'] = "Vítejte";
    $lang['menu_stats'] =  "Statistiky";
    $lang['menu_settings'] =  "Nastavení";
    $lang['menu_whiteblacklist'] =  "Seznam W/B";
    $lang['menu_quarantine'] =  "Karanténa";
    $lang['menu_report'] =  "Ohlásit Spam";
    $lang['menu_admin'] =  "Admin";
    $lang['menu_help'] =  "Nápověda";
    $lang['menu_logout'] =  "Odhlásit";

    // Text messages
    $lang['text_version'] =  "Verze";
    $lang['text_all_users'] =  "všichni uživatelé";
    $lang['text_day'] =  "den";
    $lang['text_efficiency'] =  "Úspěšnost";
    $lang['text_sensitivity'] =  "Senzitivita";
    $lang['text_specificity'] =  "Specificita";
    $lang['text_ppv'] =  "PPV";
    $lang['text_npv'] =  "NPV";
    $lang['text_false_positive'] =  "False Positive";
    $lang['text_false_negative'] =  "False Negative";
    $lang['powered_by'] = "Powered by Maia Mailguard - http://www.maiamailguard.com";
    
    $lang['text_truncate_subject'] = "Zkrátit předmět na: (znaků)";
    $lang['text_truncate_email'] = "Zkrátit řádky emailů na: (znaků)";

    // Links
    $lang['link_systemwide'] =  "Zobrazit systémové statistiky";
    $lang['link_personal'] =  "Zobrazit osobní statistiky";
    $lang['link_viruses'] =  "Zobrazit statistiky Virů";
    $lang['link_rules'] =  "Zobrazit statistiky pravidel SpamAssassin";

    // Table headers
    $lang['header_score'] =  "Score";
    $lang['header_count'] =  "Počet";
    $lang['header_size'] =  "Velikost";
    $lang['header_min'] =  "Min";
    $lang['header_max'] =  "Max";
    $lang['header_average'] =  "Avg";
    $lang['header_bandwidth'] =  "Konektivita";
    $lang['header_percent'] =  "Pct";
    $lang['header_cost'] =  "Náklady";
    $lang['header_items'] =  "Položky";
    $lang['header_type'] =  "Typ E-mailu";
    $lang['header_user'] =  "Statistiky pro uživatele: %s";
    $lang['header_systemwide'] =  "Statistiky pro všechny uživatele";
    $lang['header_spam_score'] =  "Score";
    $lang['header_rule_triggered'] =  "Sepnutí pravidla";
    $lang['header_explanation'] =  "Vysvětlení";

    $lang['array_header'] =  array("ham"            => "Confirmed Non-spam",
                                      "suspected_ham"  => "Unconfirmed Non-spam",
                                      "suspected_spam" => "Suspected Spam",
                                      "spam"           => "Confirmed Spam",
                                      "virus"          => "Viruses/Malware",
                                      "fp"             => "False Positives",
                                      "fn"             => "False Negatives",
                                      "wl"             => "Whitelisted Items",
                                      "bl"             => "Blacklisted Items",
                                      "bad_header"     => "Invalid Mail Headers",
                                      "banned_file"    => "Banned Attachments",
                                      "oversized"       => "Oversized Items");

    $lang['array_count'] =  array("ham"            => "Confirmed non-spam received",
                                      "suspected_ham"  => "Unconfirmed non-spam received",
                                      "suspected_spam" => "Suspected spam in quarantine",
                                      "spam"           => "Confirmed spam received",
                                      "virus"          => "Viruses received",
                                      "fp"             => "Items misidentified as spam",
                                      "fn"             => "Items misidentified as non-spam",
                                      "wl"             => "Items received from whitelisted senders",
                                      "bl"             => "Items received from blacklisted senders",
                                      "bad_header"     => "Items with invalid mail headers",
                                      "banned_file"    => "Items with banned file attachments",
                                      "oversized"      => "Items too large to filter");

    $lang['array_arrivals'] =  array("ham"            => "Non-spam arrivals",
                                      "suspected_ham"  => "Unconfirmed non-spam arrivals",
                                      "suspected_spam" => "Suspected spam arrivals",
                                      "spam"           => "Confirmed spam arrivals",
                                      "virus"          => "Virus arrivals",
                                      "fp"             => "False positive errors",
                                      "fn"             => "False negative errors",
                                      "wl"             => "Whitelisted arrivals",
                                      "bl"             => "Blacklisted arrivals",
                                      "bad_header"     => "Bad header arrivals",
                                      "banned_file"    => "Banned file arrivals",
                                      "oversized"      => "Oversized item arrivals");

    $lang['array_highest_score'] =  array("ham"            => "Highest non-spam score",
                                      "suspected_ham"  => "Highest unconfirmed non-spam score",
                                      "suspected_spam" => "Highest suspected spam score",
                                      "spam"           => "Highest spam score",
                                      "virus"          => "",
                                      "fp"             => "Highest false positive score",
                                      "fn"             => "Highest false negative score",
                                      "wl"             => "",
                                      "bl"             => "",
                                      "bad_header"     => "",
                                      "banned_file"    => "",
                                      "oversized"      => "");

    $lang['array_lowest_score'] =  array("ham"            => "Lowest non-spam score",
                                      "suspected_ham"  => "Lowest unconfirmed non-spam score",
                                      "suspected_spam" => "Lowest suspected spam score",
                                      "spam"           => "Lowest spam score",
                                      "virus"          => "",
                                      "fp"             => "Lowest false positive score",
                                      "fn"             => "Lowest false negative score",
                                      "wl"             => "",
                                      "bl"             => "",
                                      "bad_header"     => "",
                                      "banned_file"    => "",
                                      "oversized"      => "");

    $lang['array_average_score'] =  array("ham"            => "Average non-spam score",
                                      "suspected_ham"  => "Average unconfirmed non-spam score",
                                      "suspected_spam" => "Average suspected spam score",
                                      "spam"           => "Average spam score",
                                      "virus"          => "",
                                      "fp"             => "Average false positive score",
                                      "fn"             => "Average false negative score",
                                      "wl"             => "",
                                      "bl"             => "",
                                      "bad_header"     => "",
                                      "banned_file"    => "",
                                      "oversized"      => "");

    $lang['array_largest_size'] =  array("ham"            => "Largest non-spam size",
                                      "suspected_ham"  => "Largest unconfirmed non-spam size",
                                      "suspected_spam" => "Largest suspected spam size",
                                      "spam"           => "Largest spam size",
                                      "virus"          => "Largest virus size",
                                      "fp"             => "Largest false positive size",
                                      "fn"             => "Largest false negative size",
                                      "wl"             => "Largest whitelisted item size",
                                      "bl"             => "Largest blacklisted item size",
                                      "bad_header"     => "Largest bad header item size",
                                      "banned_file"    => "Largest banned file item size",
                                      "oversized"      => "Largest oversized item size");

    $lang['array_smallest_size'] =  array("ham"            => "Smallest non-spam size",
                                      "suspected_ham"  => "Smallest unconfirmed non-spam size",
                                      "suspected_spam" => "Smallest suspected spam size",
                                      "spam"           => "Smallest spam size",
                                      "virus"          => "Smallest virus size",
                                      "fp"             => "Smallest false positive size",
                                      "fn"             => "Smallest false negative size",
                                      "wl"             => "Smallest whitelisted item size",
                                      "bl"             => "Smallest blacklisted item size",
                                      "bad_header"     => "Smallest bad header item size",
                                      "banned_file"    => "Smallest banned file item size",
                                      "oversized"      => "Smallest oversized item size");

    $lang['array_average_size'] =  array("ham"            => "Average non-spam size",
                                      "suspected_ham"  => "Average unconfirmed non-spam size",
                                      "suspected_spam" => "Average suspected spam size",
                                      "spam"           => "Average spam size",
                                      "virus"          => "Average virus size",
                                      "fp"             => "Average false positive size",
                                      "fn"             => "Average false negative size",
                                      "wl"             => "Average whitelisted item size",
                                      "bl"             => "Average blacklisted item size",
                                      "bad_header"     => "Average bad header item size",
                                      "banned_file"    => "Average banned file item size",
                                      "oversized"      => "Average oversized item size");

    $lang['array_bandwidth'] =  array("ham"            => "Non-spam bandwidth",
                                      "suspected_ham"  => "Unconfirmed non-spam bandwidth",
                                      "suspected_spam" => "Suspected spam bandwidth",
                                      "spam"           => "Spam bandwidth",
                                      "virus"          => "Virus bandwidth",
                                      "fp"             => "False positive bandwidth",
                                      "fn"             => "False negative bandwidth",
                                      "wl"             => "Whitelisted item bandwidth",
                                      "bl"             => "Blacklisted item bandwidth",
                                      "bad_header"     => "Bad header item bandwidth",
                                      "banned_file"    => "Banned file item bandwidth",
                                      "oversized"      => "Oversized item bandwidth");

    $lang['array_cost'] =  array("ham"            => "Non-spam bandwidth cost",
                                      "suspected_ham"  => "Unconfirmed non-spam bandwidth cost",
                                      "suspected_spam" => "Suspected spam bandwidth cost",
                                      "spam"           => "Spam bandwidth cost",
                                      "virus"          => "Virus bandwidth cost",
                                      "fp"             => "False positive bandwidth cost",
                                      "fn"             => "False negative bandwidth cost",
                                      "wl"             => "Whitelisted item bandwidth cost",
                                      "bl"             => "Blacklisted item bandwidth cost",
                                      "bad_header"     => "Bad header item bandwidth cost",
                                      "banned_file"    => "Banned file item bandwidth cost",
                                      "oversized"      => "Oversized item bandwidth cost");

    $lang['array_percentage'] =  array("ham"            => "As a percentage of total mail received",
                                      "suspected_ham"  => "As a percentage of total mail received",
                                      "suspected_spam" => "As a percentage of total mail received",
                                      "spam"           => "As a percentage of total mail received",
                                      "virus"          => "As a percentage of total mail received",
                                      "fp"             => "As a percentage of total mail received",
                                      "fn"             => "As a percentage of total mail received",
                                      "wl"             => "As a percentage of total mail received",
                                      "bl"             => "As a percentage of total mail received",
                                      "bad_header"     => "As a percentage of total mail received",
                                      "banned_file"    => "As a percentage of total mail received",
                                      "oversized"      => "As a percentage of total mail received");
?>
