<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.

 * Contributor(s): Rittichai Sufu.
 * E-mail : support@marnoi.net
 * Website : http://www.marnoi.net
 
 ********************************************************************************/
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Contacts/language/en_us.lang.php,v 1.14 2005/03/24 17:47:43 rank Exp $
 * Description:  Defines the English language pack for Contacts Module
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------Added for general search
'LBL_MODULE_NAME'=>'ผู้ติดต่อ',
'LBL_INVITEE'=>'รายงานถึง',
'LBL_MODULE_TITLE'=>'ผู้ติดต่อ: หน้าหลัก',
'LBL_SEARCH_FORM_TITLE'=>'ค้นหาผู้ติดต่อ',
'LBL_LIST_FORM_TITLE'=>'แสดงผู้ติดต่อ',
'LBL_NEW_FORM_TITLE'=>'สร้างผู้ติดต่อ',
'LBL_CONTACT_OPP_FORM_TITLE'=>'ผู้ติดต่อ-โอกาสขาย:',
'LBL_CONTACT'=>'ผู้ติดต่อ:',

'LBL_LIST_NAME'=>'ชื่อ',
'LBL_LIST_LAST_NAME'=>'ชื่อสกุล',
'LBL_LIST_FIRST_NAME'=>'ชื่อจริง',
'LBL_LIST_CONTACT_NAME'=>'ชื่อผู้ติดต่อ',
'LBL_LIST_TITLE'=>'Title',
'LBL_LIST_ACCOUNT_NAME'=>'ชื่อองค์กร',
'LBL_LIST_EMAIL_ADDRESS'=>'อีเมลล์',
'LBL_LIST_PHONE'=>'โทรศํพท์',
'LBL_LIST_CONTACT_ROLE'=>'กฏ',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_last_name' => 'LBL_LIST_LAST_NAME',
'db_first_name' => 'LBL_LIST_FIRST_NAME',
'db_title' => 'LBL_LIST_TITLE',
'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
//END DON'T CONVERT
	
'LBL_EXISTING_CONTACT' => 'Used an existing contact',
'LBL_CREATED_CONTACT' => 'Created a new contact',
'LBL_EXISTING_ACCOUNT' => 'Used an existing vtiger_account',
'LBL_CREATED_ACCOUNT' => 'Created a new vtiger_account',
'LBL_CREATED_CALL' => 'Created a new call',
'LBL_CREATED_MEETING' => 'Created a new meeting',
'LBL_ADDMORE_BUSINESSCARD' =>'Add another business card',

'LBL_BUSINESSCARD' => 'นามบัตร',

'LBL_NAME'=>'ชื่อ:',
'LBL_CONTACT_NAME'=>'ชื่อผู้ติดต่อ:',
'LBL_CONTACT_INFORMATION'=>'ข้อมูลผู้ติดต่อ',
'LBL_CUSTOM_INFORMATION'=>'ช้อมูลทั่วไป',
'LBL_FIRST_NAME'=>'ชื่อจริง:',
'LBL_OFFICE_PHONE'=>'โทรศัพท์ออฟฟิค:',
'LBL_ACCOUNT_NAME'=>'ชื่อองค์กร:',
'LBL_ANY_PHONE'=>'โทรศัพท์อื่นๆ:',
'LBL_PHONE'=>'โทรศัพท์:',
'LBL_LAST_NAME'=>'สกุล:',
'LBL_MOBILE_PHONE'=>'มือถือ:',
'LBL_HOME_PHONE'=>'หน้าหลัก:',
'LBL_LEAD_SOURCE'=>'ที่มา:',
'LBL_OTHER_PHONE'=>'โทรศัพท์อื่นๆ:',
'LBL_FAX_PHONE'=>'โทรสาร:',
'LBL_TITLE'=>'ตำแหน่ง:',
'LBL_DEPARTMENT'=>'แผนก:',
'LBL_BIRTHDATE'=>'วันเกิด:',
'LBL_EMAIL_ADDRESS'=>'อีเมลล์:',
'LBL_OTHER_EMAIL_ADDRESS'=>'อีเมลล์',
'LBL_ANY_EMAIL'=>'Any Email:',
'LBL_REPORTS_TO'=>'รายงานให้กับ:',
'LBL_ASSISTANT'=>'Assistant:',
'LBL_YAHOO_ID'=>'Yahoo! ID:',
'LBL_ASSISTANT_PHONE'=>'Assistant Phone:',
'LBL_DO_NOT_CALL'=>'Do Not Call:',
'LBL_EMAIL_OPT_OUT'=>'Email Opt Out:',
'LBL_PRIMARY_ADDRESS'=>'Primary Address:',
'LBL_ALTERNATE_ADDRESS'=>'Other Address:',
'LBL_ANY_ADDRESS'=>'ที่อยู่:',
'LBL_CITY'=>'อำเภอ:',
'LBL_STATE'=>'จังหวัด:',
'LBL_POSTAL_CODE'=>'รหัสไปรษณีย์:',
'LBL_COUNTRY'=>'ประเทศ:',
'LBL_DESCRIPTION_INFORMATION'=>'ข้อมูลรายละเอียด',
'LBL_IMAGE_INFORMATION'=>'ข้อมูลรูปผู้ติดต่อ:',
'LBL_ADDRESS_INFORMATION'=>'ข้อมุลที่อยู่',
'LBL_DESCRIPTION'=>'รายละเอียด:',
'LBL_CONTACT_ROLE'=>'กฏ:',
'LBL_OPP_NAME'=>'ชื่อโอกาสขาย:',
'LBL_DUPLICATE'=>'Opportunities Duplicate Contacts',
'MSG_DUPLICATE' => 'Creating this contact may vtiger_potentialy create a duplicate contact. You may either select a contact from the list below or you may click on Create New Contact to continue creating a new contact with the previously entered data.',

'LNK_NEW_APPOINTMENT' => 'สร้างการนัดหมาย',
'LBL_ADD_BUSINESSCARD' => 'เพิ่มนามบัตร',
'NTC_DELETE_CONFIRMATION'=>'คุณต้องการจะลบหรือไม่?',
'NTC_REMOVE_CONFIRMATION'=>'Are you sure you want to remove this contact from this case?',
'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION'=>'Are you sure you want to remove this record as a direct vtiger_report?',
'ERR_DELETE_RECORD'=>"en_us A record number must be specified to delete the contact.",
'NTC_COPY_PRIMARY_ADDRESS'=>'Copy primary address to alternate address',
'NTC_COPY_ALTERNATE_ADDRESS'=>'Copy alternate address to primary address',

'LBL_SELECT_CONTACT'=>'เลือกผู้ติดต่อ',
//Added for search heading
'LBL_GENERAL_INFORMATION'=>'ข้อมูลหลัก',



//for v4 release added
'LBL_NEW_POTENTIAL'=>'สร้างโอกาสขาย',
'LBL_POTENTIAL_TITLE'=>'โอกาสขาย',

'LBL_NEW_TASK'=>'สร้างทาร์ส',
'LBL_TASK_TITLE'=>'ทาร์ส',
'LBL_NEW_CALL'=>'เพิ่มการโทร',
'LBL_CALL_TITLE'=>'การโทร',
'LBL_NEW_MEETING'=>'เพิ่มการประชุม',
'LBL_MEETING_TITLE'=>'ประชุม',
'LBL_NEW_EMAIL'=>'สร้างอีเมลล์',
'LBL_EMAIL_TITLE'=>'อีเมลล์',
'LBL_NEW_NOTE'=>'สร้างเอกสาร',
'LBL_NOTE_TITLE'=>'เอกสาร',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Contact Tools',

'Salutation'=>'คำนำหน้า',
'First Name'=>'ชื่อจริง',
'Office Phone'=>'โทรศัพท์ออฟฟิค',
'Last Name'=>'นามสกุล',
'Mobile'=>'มือถือ',
'Account Name'=>'ชื่อองค์กร',
'Home Phone'=>'โทรศัพท์บ้าน',
'Lead Source'=>'มาจาก',
'Other Phone'=>'โทรศัพท์ออฟิค',
'Title'=>'ตำแหน่ง',
'Fax'=>'โทรสาร',
'Department'=>'แผนก',
'Birthdate'=>'วันเกิด',
'Email'=>'อีเมลล์',
'Reports To'=>'รายงานถึง',
'Assistant'=>'ช่วยเหลือ',
'Yahoo Id'=>'Yahoo Id',
'Assistant Phone'=>'Assistant Phone',
'Do Not Call'=>'Do Not Call',
'Email Opt Out'=>'Email Opt Out',
'Assigned To'=>'ผู้รับผิดชอบ',
'Campaign Source'=>'แคมเปญ',
'Reference' =>'อ้างอิง',
'Created Time'=>'เวลาสร้าง',
'Modified Time'=>'เวลาแก้ไข',
'Mailing Street'=>'ถนน',
'Other Street'=>'Other Street',
'Mailing City'=>'Mailing City',
'Mailing State'=>'Mailing State',
'Mailing Zip'=>'Mailing Postal Code',
'Mailing Country'=>'Mailing Country',
'Mailing Po Box'=>'Mailing PO Box',
'Other Po Box'=>'Other PO Box',
'Other City'=>'Other City',
'Other State'=>'Other State',
'Other Zip'=>'Other Postal Code',
'Other Country'=>'Other Country',
'Contact Image'=>'รูปภาพผู้ติดต่อ',
'Description'=>'รายละเอียด',

// Added vtiger_fields for Add Business Card
'LBL_NEW_CONTACT'=>'สร้างผู้ติดต่อ',
'LBL_NEW_ACCOUNT'=>'สร้างลูกค้า',
'LBL_NOTE_SUBJECT'=>'หัวเรื่องเอกสาร:',
'LBL_NOTE'=>'บันทึก:',
'LBL_WEBSITE'=>'เว็บไซต์:',
'LBL_NEW_APPOINTMENT'=>'สร้างการนัดหมาย',
'LBL_SUBJECT'=>'หัวเรื่อง:',
'LBL_START_DATE'=>'วันเริ่ม:',
'LBL_START_TIME'=>'เวลาเริ่ม:',

//Added vtiger_field after 4_0_1
'Portal User'=>'Portal User',
'LBL_CUSTOMER_PORTAL_INFORMATION'=>'Customer Portal Information',
'Support Start Date'=>'Support Start Date',
'Support End Date'=>'Support End Date',
//Added for 4.2 Release -- CustomView
'Name'=>'ชื่อ',
'LBL_ALL'=>'ทั้งหมด',
'LBL_MAXIMUM_LIMIT_ERROR'=>'Sorry, the uploaded file exceeds the maximum vtiger_filesize limit. Please try a file smaller than 800000 bytes',
'LBL_UPLOAD_ERROR'=>'Problems in file upload. Please try again!',
'LBL_IMAGE_ERROR'=>'The given file is not of type image(.gif/.jpg/.png)',
'LBL_INVALID_IMAGE'=>'Invalid file OR File has no data',

//Added after 5Alpha5
'Notify Owner'=>'Notify Owner',

//Added for Picklist Values
'--None--'=>'--ว่าง--',

'Mr.'=>'นาย',
'Ms.'=>'นาง',
'Mrs.'=>'นางสาว',
'Dr.'=>'ดอกเตอร์',
'Prof.'=>'ศาสตราจารย์',

'Cold Call'=>'Cold Call',
'Existing Customer'=>'Existing Customer',
'Self Generated'=>'Self Generated',
'Employee'=>'Employee',
'Partner'=>'Partner',
'Public Relations'=>'Public Relations',
'Direct Mail'=>'Direct Mail',
'Conference'=>'Conference',
'Trade Show'=>'Trade Show',
'Web Site'=>'Web Site',
'Word of mouth'=>'Word of mouth',
'Other'=>'Other',
'User List'=>'User List',

//Added for 5.0.3
'Customer Portal Login Details'=>'Customer Portal Login Details',
'Dear'=>'Dear',
'Your Customer Portal Login details are given below:'=>'Your Customer Portal Login details are given below:',
'User Id :'=>'User Id :',
'Password :'=>'รหัสผ่าน :',
'Please Login Here'=>'กรุณาเข้าสู่ระบบ',
'Note :'=>'บันทึก :',
'We suggest you to change your password after logging in first time'=>'We suggest you to change your password after logging in first time.',
'Support Team'=>'Support Team',

'TITLE_AJAX_CSS_POPUP_CHAT'=>'Ajax Css-Popup chat',

// Added after 5.0.4 GA

// Module Sequence Numbering
'Contact Id' => 'Contact Id',
'Secondary Email'=>'Secondary Email',
// END

'Contacts ID'=>'Contacts ID',
);

?>
