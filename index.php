<?php
session_start(); // starts the session
date_default_timezone_set('Asia/Dhaka'); // seting our timezone
$time_string = date("Gi"); // returns a string
$time = (int)$time_string; // converting the string to integar
// setting up Default values of the routine
$techer = "There is no class currently";
$id = null;
$password = null;
$link = null;
$prev_techer = "No previous class now";
$prev_id = null;
$prev_password = null;
$prev_link = null;
$ended = null;
$up_techer = "No upcoming classes now";
$up_id = null;
$up_password = null;
$up_link = null;
$started = null;
$mli_pass = "mli@rumc";
// setting the routine.
if(date('l') == "Saturday"){
    if($time >= 945 && $time < 1000){
        $techer = "Form Class (MMU sir)";
        $id = "2054021488";
        $password = "mmu@rumc";
        $link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $up_techer = "REL (MJH Sir)";
        $up_id = "9018486694";
        $up_passwrod = "mjh@rumc";
        $up_link = "https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09";
        $started = "10:10 AM";
    }
    if($time >= 1000 && $time < 1050){
        $prev_techer = "Form Class (MMU sir)";
        $prev_id = "2054021488";
        $prev_password = "mmu@rumc";
        $prev_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $ended = "10:00 AM";
        $techer = "REL (MJH Sir)";
        $id = "9018486694";
        $password = "mjh@rumc";
        $link = "https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09";
        $up_techer = "BGS (SMS Miss)";
        $up_id = "4351375530";
        $up_password = "sms@rumc";
        $up_link = "https://us04web.zoom.us/j/4351375530?pwd=K2VLdVcrLzI5QmdqN1JDb2JESno0QT09";
        $started = "11:00 AM";
    }
    if($time >= 1050 && $time < 1140){
        $prev_techer = "REL (MJH Sir)";
        $prev_id = "9018486694";
        $prev_password = "mjh@rumc";
        $prev_link = "https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09";
        $ended = "10:50 AM";
        $techer = "BGS (SMS Miss)";
        $id = "4351375530";
        $password = "sms@rumc";
        $link = "https://us04web.zoom.us/j/4351375530?pwd=K2VLdVcrLzI5QmdqN1JDb2JESno0QT09";
        $up_techer = "B - 2 (SBA Sir)";
        $up_id = "2627129367";
        $up_password = "sba@rumc";
        $up_link = "https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09";
        $started = "11:50 AM";
    }
    if($time >= 1140 && $time < 1230){
        $prev_techer = "BGS (SMS Miss)";
        $prev_id = "4351375530";
        $prev_password = "sms@rumc";
        $prev_link = "https://us04web.zoom.us/j/4351375530?pwd=K2VLdVcrLzI5QmdqN1JDb2JESno0QT09";
        $ended = "11:40 AM";
        $techer = "B - 2 (SBA Sir)";
        $id = "2627129367";
        $password = "sba@rumc";
        $link = "https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09";
    }
}
if(date('l') == "Sunday"){
    if($time >= 945 && $time < 1000){
        $techer = "Form Class (MMU sir)";
        $id = "2054021488";
        $password = "mmu@rumc";
        $link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $up_techer = "CHE (MLI Sir)";
        $up_id = "3159338639";
        $up_password = "mli@rumc";
        $up_link = "https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09";
        $started = "10:10 AM";
    }
    if($time >= 1000 && $time < 1050){
        $prev_techer = "Form Class (MMU sir)";
        $prev_id = "2054021488";
        $prev_password = "mmu@rumc";
        $prev_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $ended = "10:00 AM";
        $techer = "CHE (MLI Sir)";
        $id = "3159338639";
        $password = "mli@rumc";
        $link = "https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09";
        $up_techer = "BIO (AAL Miss)";
        $up_id = "9855801606";
        $up_password = "aal@rumc";
        $up_link = "https://us04web.zoom.us/j/9855801606?pwd=VTZnakxSY2xVRXgyZzQ3N2lwSkgyZz09";
        $started = "11:00";
    }
    if($time >= 1050 && $time < 1140){
        $prev_techer = "CHE (MLI Sir)";
        $prev_id = "3159338639";
        $prev_password = "mli@rumc";
        $prev_link = "https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09";
        $ended = "10:50 AM";
        $techer = "BIO (AAL Miss)";
        $id = "9855801606";
        $password = "aal@rumc";
        $link = "https://us04web.zoom.us/j/9855801606?pwd=VTZnakxSY2xVRXgyZzQ3N2lwSkgyZz09";
        $up_techer = "HM (AZR Sir)";
        $up_id = "7338011033";
        $up_password = "azr@rumc";
        $up_link = "https://us04web.zoom.us/j/7338011033?pwd=RU9KMVFlTjhnUXNkUnh5T2RvRVIyQT09";
        $started = "11:50 AM";
    }
    if($time >= 1140 && $time < 1230){
        $prev_techer = "BIO (AAL Miss)";
        $prev_id = "9855801606";
        $prev_password = "aal@rumc";
        $prev_link = "https://us04web.zoom.us/j/9855801606?pwd=VTZnakxSY2xVRXgyZzQ3N2lwSkgyZz09";
        $ended = "11:40 AM";
        $techer = "HM (AZR Sir)";
        $id = "7338011033";
        $password = "azr@rumc";
        $link = "https://us04web.zoom.us/j/7338011033?pwd=RU9KMVFlTjhnUXNkUnh5T2RvRVIyQT09";
        $up_techer = "GM (MFN Sir)";
        $up_id = "3056994432";
        $up_password = "mfn@rumc";
        $up_link = "https://us04web.zoom.us/j/3056994432?pwd=UW1XL2ZXblBsTUwwcFZSbHBPYkpKUT09";
        $started = "12:40 AM";
    }
    if($time >= 1230 && $time < 1320){
        $prev_techer = "HM (AZR Sir)";
        $prev_id = "7338011033";
        $prev_password = "azr@rumc";
        $prev_link = "https://us04web.zoom.us/j/7338011033?pwd=RU9KMVFlTjhnUXNkUnh5T2RvRVIyQT09";
        $ended = "12:30 AM";
        $techer = "GM (MFN Sir)";
        $id = "3056994432";
        $password = "mfn@rumc";
        $link = "https://us04web.zoom.us/j/3056994432?pwd=UW1XL2ZXblBsTUwwcFZSbHBPYkpKUT09";
    }
}
if(date('l') == "Monday"){
    if($time >= 945 && $time < 1000){
        $techer = "Form Class (MMU sir)";
        $id = "2054021488";
        $password = "mmu@rumc";
        $link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $up_techer = "B-1 (MS Miss)";
        $up_id = "7297530540";
        $up_password = "ms@rumc";
        $up_link = "https://us04web.zoom.us/j/7297530540?pwd=QUFUMTNvb0tiS3VGOGNOck1mMVl5dz09";
        $started = "10:10 AM";
    }
    if($time >= 1000 && $time < 1050){
        $prev_techer = "Form Class (MMU sir)";
        $prev_id = "2054021488";
        $prev_password = "mmu@rumc";
        $prev_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $ended = "10:00 AM";
        $techer = "B-1 (MS Miss)";
        $id = "7297530540";
        $password = "ms@rumc";
        $link = "https://us04web.zoom.us/j/7297530540?pwd=QUFUMTNvb0tiS3VGOGNOck1mMVl5dz09";
        $up_techer = "ICT (MNA Sir)";
        $up_id = "9894493425";
        $up_password = "mna@rumc";
        $up_link = "https://us04web.zoom.us/j/9894493425?pwd=cmhRaHAxYmFONDQ4ZzE5d21vZGpPUT09";
        $started = "11:00 AM";
    }
    if($time >= 1050 && $time < 1140){
        $prev_techer = "B-1 (MS Miss)";
        $prev_id = "7297530540";
        $prev_password = "ms@rumc";
        $prev_link = "https://us04web.zoom.us/j/7297530540?pwd=QUFUMTNvb0tiS3VGOGNOck1mMVl5dz09";
        $ended = "10:50 AM";
        $techer = "ICT (MNA Sir)";
        $id = "9894493425";
        $password = "mna@rumc";
        $link = "https://us04web.zoom.us/j/9894493425?pwd=cmhRaHAxYmFONDQ4ZzE5d21vZGpPUT09";
        $up_techer = "GM (ANH Sir)";
        $up_id = "9733291074";
        $up_password = "anh@rumc";
        $up_link = "https://us04web.zoom.us/j/9733291074?pwd=REhEaitKcW9obE51amJmb2d2TXBuZz09";
        $started = "11:50 AM";
    }
    if($time >= 1140 && $time < 1230){
        $prev_techer = "ICT (MNA Sir)";
        $prev_id = "9894493425";
        $prev_password = "mna@rumc";
        $prev_link = "https://us04web.zoom.us/j/9894493425?pwd=cmhRaHAxYmFONDQ4ZzE5d21vZGpPUT09";
        $ended = "11:40 AM";
        $techer = "GM (ANH Sir)";
        $id = "9733291074";
        $password = "anh@rumc";
        $link = "https://us04web.zoom.us/j/9733291074?pwd=REhEaitKcW9obE51amJmb2d2TXBuZz09";
        $up_techer = "E-2 (SDI Sir)";
        $up_id = "2368232378";
        $up_password = "sdi@rumc";
        $up_link = "https://us04web.zoom.us/j/2368232378?pwd=bEFvdVlHMWVNdjlINEZ2NklhNW81QT09";
        $started = "12:40 AM";
    }
    if($time >= 1230 && $time < 1320){
        $prev_techer = "GM (ANH Sir)";
        $prev_id = "9733291074";
        $prev_password = "anh@rumc";
        $prev_link = "https://us04web.zoom.us/j/9733291074?pwd=REhEaitKcW9obE51amJmb2d2TXBuZz09";
        $ended = "12:30 AM";
        $techer = "E-2 (SDI Sir)";
        $id = "2368232378";
        $password = "sdi@rumc";
        $link = "https://us04web.zoom.us/j/2368232378?pwd=bEFvdVlHMWVNdjlINEZ2NklhNW81QT09";
    }
}
if(date('l') == "Tuesday"){
    if($time >= 945 && $time < 1000){
        $techer = "Form Class (MMU sir)";
        $id = "2054021488";
        $password = "mmu@rumc";
        $link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $up_techer = "PHY (MSH Sir)";
        $up_id = "7429303098";
        $up_password = "msh@rumc";
        $up_link = "https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09";
        $started = "10:10 AM";
    }
    if($time >= 1000 && $time < 1050){
        $prev_techer = "Form Class (MMU sir)";
        $prev_id = "2054021488";
        $prev_password = "mmu@rumc";
        $prev_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $ended = "10:00 AM";
        $techer = "PHY (MSH Sir)";
        $id = "7429303098";
        $password = "msh@rumc";
        $link = "https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09";
        $up_techer = "B - 2 (SBA Sir)";
        $up_id = "2627129367";
        $up_password = "sba@rumc";
        $up_link = "https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09";
        $started = "11:00 AM";
    }
    if($time >= 1050 && $time < 1140){
        $prev_techer = "PHY (MSH Sir)";
        $prev_id = "7429303098";
        $prev_password = "msh@rumc";
        $prev_link = "https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09";
        $ended = "11:40 AM";
        $techer = "B - 2 (SBA Sir)";
        $id = "2627129367";
        $password = "sba@rumc";
        $link = "https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09";
        $up_techer = "CHE (MLI Sir)";
        $up_id = "3159338639";
        $up_password = "mli@rumc";
        $up_link = "https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09";
        $started = "11:50 AM";
    }
    if($time >= 1140 && $time < 1230){
        $prev_techer = "B - 2 (SBA Sir)";
        $prev_id = "2627129367";
        $prev_password = "sba@rumc";
        $prev_link = "https://us04web.zoom.us/j/2627129367?pwd=YjhmOUxjSno5WEszdlBsTnI4VHJQQT09";
        $ended = "11:40 AM";
        $techer = "CHE (MLI Sir)";
        $id = "3159338639";
        $password = "mli@rumc";
        $link = "https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09";
        $up_techer = "E - 1 (SPS Sir)";
        $up_id = "4451007357";
        $up_password = "sps@rumc";
        $up_link = "https://us04web.zoom.us/j/4451007357?pwd=QU82TzNPMnFOUFdCODZWWnl5NFIwdz09"; 
        $started = "12:40 AM"; 
    }
    if($time >= 1230 && $time < 1320){
        $prev_techer = "CHE (MLI Sir)";
        $prev_id = "3159338639";
        $prev_password = "mli@rumc";
        $prev_link = "https://us04web.zoom.us/j/3159338639?pwd=d1QvNjZTK0M0MkxtbktVK29yRjRuUT09";
        $ended = "12:30 AM";
        $techer = "E - 1 (SPS Sir)";
        $id = "4451007357";
        $password = "sps@rumc";
        $link = "https://us04web.zoom.us/j/4451007357?pwd=QU82TzNPMnFOUFdCODZWWnl5NFIwdz09";
    }
}
if(date('l') == "Wednesday"){
    if($time >= 945 && $time < 1000){
        $techer = "Form Class (MMU sir)";
        $id = "2054021488";
        $password = "mmu@rumc";
        $link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $up_techer = "BIO (MAR Miss)";
        $up_id = "6830754268";
        $up_password = "mar@rumc";
        $up_link = "https://us04web.zoom.us/j/6830754268?pwd=RFVJTWtVZjliOEdqblo5WUxuNEx4QT09";
        $started = "10:10 AM";
    }
    if($time >= 1000 && $time < 1050){
        $prev_techer = "Form Class (MMU sir)";
        $prev_id = "2054021488";
        $prev_password = "mmu@rumc";
        $prev_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $ended = "10:00 AM";
        $techer = "BIO (MAR Miss)";
        $id = "6830754268";
        $password = "mar@rumc";
        $link = "https://us04web.zoom.us/j/6830754268?pwd=RFVJTWtVZjliOEdqblo5WUxuNEx4QT09";
        $up_techer = "PHY (MSH Sir)";
        $up_id = "7429303098";
        $up_password = "msh@rumc";
        $up_link = "https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09";
        $started = "11:00 AM";
    }
    if($time >= 1050 && $time < 1140){
        $prev_techer = "BIO (MAR Miss)";
        $prev_id = "6830754268";
        $prev_password = "mar@rumc";
        $prev_link = "https://us04web.zoom.us/j/6830754268?pwd=RFVJTWtVZjliOEdqblo5WUxuNEx4QT09";
        $ended = "10:50 AM";
        $techer = "PHY (MSH Sir)";
        $id = "7429303098";
        $password = "msh@rumc";
        $link = "https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09";
        $up_techer = "E-2 (SDI Sir)";
        $up_id = "2368232378";
        $up_password = "sdi@rumc";
        $up_link = "https://us04web.zoom.us/j/2368232378?pwd=bEFvdVlHMWVNdjlINEZ2NklhNW81QT09";
        $started = "11:50 AM";
    }
    if($time >= 1140 && $time < 1230){
        $prev_techer = "PHY (MSH Sir)";
        $prev_id = "7429303098";
        $prev_password = "msh@rumc";
        $prev_link = "https://us04web.zoom.us/j/7429303098?pwd=dllGdHF6anhUTzdVWElnM2h2b0oxUT09";
        $ended = "11:40 AM";
        $techer = "E-2 (SDI Sir)";
        $id = "2368232378";
        $password = "sdi@rumc";
        $link = "https://us04web.zoom.us/j/2368232378?pwd=bEFvdVlHMWVNdjlINEZ2NklhNW81QT09";
    }
}
if(date('l') == "Thursday"){
    if($time >= 945 && $time < 1000){
        $techer = "Form Class (MMU sir)";
        $id = "2054021488";
        $password = "mmu@rumc";
        $link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $up_techer = "BGS (ZF Miss)";
        $up_id = "6022353957";
        $up_password = "zf@rumc";
        $up_link = "https://us04web.zoom.us/j/6022353957?pwd=V2NlbHdRcDVWRDVrY2FpSGQvRkZnUT09";
        $started = "10:10 AM";
    }
    if($time >= 1000 && $time < 1050){
        $prev_techer = "Form Class (MMU sir)";
        $prev_id = "2054021488";
        $prev_password = "mmu@rumc";
        $prev_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $ended = "10:00 AM";
        $techer = "BGS (ZF Miss)";
        $id = "6022353957";
        $password = "zf@rumc";
        $link = "https://us04web.zoom.us/j/6022353957?pwd=V2NlbHdRcDVWRDVrY2FpSGQvRkZnUT09";
        $up_techer = "REL (MJH Sir)";
        $up_id = "9018486694";
        $up_password = "mjh@rumc";
        $up_link = "https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09";
        $started = "11:00 AM";
    }
    if($time >= 1050 && $time < 1140){
        $prev_techer = "BGS (ZF Miss)";
        $prev_id = "6022353957";
        $prev_password = "zf@rumc";
        $prev_link = "https://us04web.zoom.us/j/6022353957?pwd=V2NlbHdRcDVWRDVrY2FpSGQvRkZnUT09";
        $ended = "10:50 AM";
        $techer = "REL (MJH Sir)";
        $id = "9018486694";
        $password = "mjh@rumc";
        $link = "https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09";
        $up_techer = "HM (MMU sir)";
        $up_id = "2054021488";
        $up_password = "mmu@rumc";
        $up_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $started = "11:50 AM";
    }
    if($time >= 1140 && $time < 1230){
        $prev_techer = "REL (MJH Sir)";
        $prev_id = "9018486694";
        $prev_password = "mjh@rumc";
        $prev_link = "https://us04web.zoom.us/j/9018486694?pwd=eld4VGxBdTlhemVTZlFKK2NDcXpPZz09";
        $ended = "11:40 AM";
        $techer = "HM (MMU sir)";
        $id = "2054021488";
        $password = "mmu@rumc";
        $link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $up_techer = "Cultural (NND sir)";
        $up_id = "2163696888";
        $up_password = "nnd@rumc";
        $up_link = "https://us04web.zoom.us/j/2163696888?pwd=c21zSWhWdCtSait5V0lheW5WWUhkQT09";
        $started = "12:40 AM";
    }
    if($time >= 1230 && $time < 1320){
        $prev_techer = "HM (MMU sir)";
        $prev_id = "2054021488";
        $prev_password = "mmu@rumc";
        $prev_link = "https://us04web.zoom.us/j/2054021488?pwd=NGpRNm8rRlR0emszeER2Z3NMcTlIQT09";
        $ended = "12:30 AM";
        $techer = "Cultural (NND sir)";
        $id = "2163696888";
        $password = "nnd@rumc";
        $link = "https://us04web.zoom.us/j/2163696888?pwd=c21zSWhWdCtSait5V0lheW5WWUhkQT09";                                
    }
                                    
}
// if(date('l') == "Friday"){
// }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Zoom Link</title>
    <!-- extra css -->

    <style>
    .fix {
        display: flex;
        justify-content: right;
    }
    h3{
        color: green;
    }
    </style>
</head>

<body>
    <!-- including navbar and more -->
    <?php 
    include 'partials/_header.php';
    ?>
    <!-- device time notice -->
    <div class="container">

        <h2 class="text-danger my-3">Please insure that <b> your device time is set correctly </b> before using our
            website.
            otherwise it will missbehave</h2>
        <!-- clock -->
        <div class="fix">
            <div class="cleanslate w24tz-current-time w24tz-middle"
                style="display: inline-block !important; visibility: hidden !important; min-width:300px !important; min-height:145px !important;">
                <p><a href="//24timezones.com/Dhaka/time" style="text-decoration: none" class="clock24"
                        id="tz24-1607580498-c173-eyJob3VydHlwZSI6MTIsInNob3dkYXRlIjoiMSIsInNob3dzZWNvbmRzIjoiMSIsImNvbnRhaW5lcl9pZCI6ImNsb2NrX2Jsb2NrX2NiNWZkMWJiNTJkYWE1YSIsInR5cGUiOiJkYiIsImxhbmciOiJlbiJ9"
                        title="Dhaka Time" target="_blank" rel="nofollow">Time in Dhaka</a></p>
                <div id="clock_block_cb5fd1bb52daa5a"></div>
            </div>
        </div>
        <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
        <!-- previous class section starts from here -->
        <?php
       echo '<div class="card text-center">
            <div class="card-header">
                Previous Class
            </div>
            <div class="card-body">
                <h5 class="card-title">'. $prev_techer .'</h5>';
                if($prev_id != null){
               echo '<p class="card-text">Id = '. $prev_id .' password = '. $prev_password .'</p>
                <a href="routine.php" class="btn btn-primary">Ended at '. $ended .'</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#preModal">
        Join meeting
    </button>';
    // special if statement for special teacher mli sir
                if($prev_password == "mli@rumc"){
              echo  '<h5 class="card-title my-3">'. $prev_techer .'</h5>
                <p class="card-text">Id = '. $prev_id .' password = 2kqm3q</p>
                <a href="routine.php" class="btn btn-primary">Ended at '. $ended .'</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#premliModal">
        Join meeting
    </button>
                <p class="card-text">When first link requires password try second one</p>
            </div>
        </div>';
        }
    }
    // now class starts from here
        echo '<div class="card text-center my-4">
            <div class="card-header">
                Now
            </div>
            <div class="card-body">
                <h5 class="card-title">'. $techer .'</h5>';
                if($id != null){
              echo  '<p class="card-text">Id = '. $id .' password = '. $password .'</p>
                <a href="'. $link .'" target="_blank" class="btn btn-outline-danger">Join Meeting</a>';
                // 1 balti somobedona for mli sir
                if($password == $mli_pass){
              echo  '<h5 class="card-title my-3">'. $techer .'</h5>
                <p class="card-text">Id = '. $id .' password = 2kqm3q</p>
                <a href="https://us04web.zoom.us/j/3159338639?pwd=V2xCNXBEZW1hNUdFb3NzUWpQL2wzdz09" target="_blank" class="btn btn-outline-danger">Join Meeting</a>
                <p class="card-text my-3">When first link requires password try second one</p>
            </div>';
                }
            }
            // upcoming class starts from here
        echo '</div>
        <div class="card text-center my-4">
            <div class="card-header">
                Upcoming Class
            </div>
            <div class="card-body">
                <h5 class="card-title">'. $up_techer .'</h5>';
                if($up_id != null){
              echo  '<p class="card-text">Id = '. $up_id .' password = '. $up_password .'</p>
                <a href="routine.php" class="btn btn-primary">will start at '. $started .'</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#upModal">
        Join meeting
    </button>';
                }
                // mli sir gives me lot of pleasure.
    if($up_password == "mli@rumc"){
    echo '<h5 class="card-title my-3">'. $up_techer .'</h5>
    <p class="card-text">Id = '. $up_id .' password = 2kqm3q</p>
                <a href="routine.php" class="btn btn-primary">will start at '. $started .'</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#upmliModal">
        Join meeting
    </button>
    <p class="card-text">When first link requires password try second one</p>';
            }
            // this not works.. sad
            setcookie("catagory", "Books", time() + 2592000, "/zoomlink");
            if(!isset($_COOKIE['catagory'])){
                echo '<script>
                Swal.fire({
                    title: "<h3>Welcome to</h3>",
                    icon: "info",
                    html:
                    "<h1>Zoom Link</h1>"+
                    "<p>Version 4.0.0<p>" +
                    "<h3>Whats new?</h3>" +
                    "<p>Responsive Website<p>" +
                    "<p>Upcoming and Previous Class<p>" +
                    "<p>Discussion and more<p>" ,
                 })
            </script>';
            }
            
        ?>
    </div>


    <!-- previous class Modal -->
    <div class="modal fade" id="preModal" tabindex="-1" aria-labelledby="preModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="preModalLabel">Confrimation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This class is already ended at <?php echo $ended ?>. Are you sure you want to join this class?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?php echo $prev_link ?>" target="_blank" class="btn btn-primary">Join Meeting</a>
                </div>
            </div>
        </div>
    </div>
    <!-- previous mli sir special modal -->
    <div class="modal fade" id="premliModal" tabindex="-1" aria-labelledby="premliModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="premliModalLabel">Confrimation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This class is already ended at <?php echo $ended ?>. Are you sure you want to join this class?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="https://us04web.zoom.us/j/3159338639?pwd=V2xCNXBEZW1hNUdFb3NzUWpQL2wzdz09" target="_blank"
                        class="btn btn-primary">Join Meeting</a>
                </div>
            </div>
        </div>
    </div>
    <!-- upcoming class modal -->
    <div class="modal fade" id="upModal" tabindex="-1" aria-labelledby="upModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="upModalLabel">Confrimation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This class will start at <?php echo $started ?>. Are you sure you want to join this class?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?php echo $up_link ?>" target="_blank" class="btn btn-primary">Join Meeting</a>
                </div>
            </div>
        </div>
    </div>
    <!-- upcoming mli sir special modal -->
    <div class="modal fade" id="upmliModal" tabindex="-1" aria-labelledby="upmliModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="upmliModalLabel">Confrimation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This class will start at <?php echo $started ?>. Are you sure you want to join this class?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="https://us04web.zoom.us/j/3159338639?pwd=V2xCNXBEZW1hNUdFb3NzUWpQL2wzdz09" target="_blank"
                        class="btn btn-primary">Join Meeting</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    // alerts
    if(isset($_GET['logout']) && $_GET['logout'] == true){
        echo "<script>
        Swal.fire({
            title: '<h3>Success</h3>',
            icon: 'success',
            html:
            '<h3>You are successfully logged out</h3>',
        })
    </script>";
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>