<?php
// Version: 2.1.0; ManageMembers

global $context;

$txt['groups'] = 'গ্রুপ';
$txt['viewing_groups'] = 'সদস্যগ্রুপ দেখছেন';

$txt['membergroups_title'] = 'সদস্যগ্রুপ পরিচালনা করুন';
$txt['membergroups_description'] = 'সদস্যগ্রুপ হল সদস্যদের একটি গ্রুপ যারা অনুরূপ অনুমতি সেটিংস, চেহারা, বা অ্যাক্সেস অধিকারগুলি ভাগ করে। কিছু সদস্যগ্রুপ একটি ব্যবহারকারীর পোস্টের সংখ্যা অনুযায়ী ভিত্তি করে। আপনি তাদের প্রোফাইল নির্বাচন করে এবং তাদের অ্যাকাউন্ট সেটিংস পরিবর্তন করে কাউকে একটি সদস্যগ্রুপে নিয়োগ দিতে পারেন।';
$txt['membergroups_modify'] = 'সংশোধন করুন';

$txt['membergroups_add_group'] = 'গ্রুপ যোগ করুন';
$txt['membergroups_regular'] = 'নিয়মিত গ্রুপ';
$txt['membergroups_post'] = 'পোস্ট সংখ্যা ভিত্তিক গ্রুপ';
$txt['membergroups_guests_na'] = 'n/a';

$txt['membergroups_group_name'] = 'সদস্যগ্রুপের নাম';
$txt['membergroups_new_board'] = 'দৃশ্যমান বোর্ড';
$txt['membergroups_new_board_desc'] = 'বোর্ডগুলি যা সদস্যগ্রুপ দেখতে পারে';
$txt['membergroups_new_board_post_groups'] = '<em>দ্রষ্টব্য: সাধারণত, পোস্ট গ্রুপগুলির অ্যাক্সেসের প্রয়োজন নেই কারণ সদস্য যেই গ্রুপে রয়েছে সেটি তাদের অ্যাক্সেস দেবে।</em>';
$txt['membergroups_new_as_inherit'] = 'থেকে উত্তরাধিকারী';
$txt['membergroups_new_as_type'] = 'দ্বারা প্রকার';
$txt['membergroups_new_as_copy'] = 'এর ভিত্তিতে';
$txt['membergroups_new_copy_none'] = '(কিছুই নেই)';
$txt['membergroups_can_edit_later'] = 'আপনি পরে সেগুলি সম্পাদনা করতে পারেন।';
$txt['membergroups_can_manage_access'] = 'এই গ্রুপটি সমস্ত বোর্ড দেখতে পারে কারণ তাদের বোর্ডগুলি পরিচালনা করার ক্ষমতা আছে।';

$txt['membergroups_cannot_delete_paid'] = 'এই গ্রুপটি মুছে ফেলা যাবে না, এটি বর্তমানে নিম্নলিখিত পেইড সাবস্ক্রিপশন দ্বারা ব্যবহৃত হচ্ছে: %1$s';

$txt['membergroups_edit_group'] = 'সদস্যগ্রুপ সম্পাদনা করুন';
$txt['membergroups_edit_name'] = 'গ্রুপের নাম';
$txt['membergroups_edit_inherit_permissions'] = 'অনুমতি উত্তরাধিকারী';
$txt['membergroups_edit_inherit_permissions_desc'] = 'গ্রুপটির নিজস্ব অনুমতি সেট থাকতে সক্ষম করতে &quot;না&quot; নির্বাচন করুন।';
$txt['membergroups_edit_inherit_permissions_no'] = 'না - অনন্য অনুমতি ব্যবহার করুন';
$txt['membergroups_edit_inherit_permissions_from'] = 'থেকে উত্তরাধিকারী';
$txt['membergroups_edit_hidden'] = 'দৃশ্যমানতা';
$txt['membergroups_edit_hidden_no'] = 'দৃশ্যমান';
$txt['membergroups_edit_hidden_boardindex'] = 'দৃশ্যমান - গ্রুপ কীতে ছাড়া';
$txt['membergroups_edit_hidden_all'] = 'অদৃশ্য';
// Do not use numeric entities in the below string.
$txt['membergroups_edit_hidden_warning'] = 'আপনি কি নিশ্চিত যে আপনি এই গ্রুপটিকে ব্যবহারকারীদের প্রধান গ্রুপ হিসাবে বরাদ্দ করতে নিষিদ্ধ করতে চান?\\n\\nএটি অতিরিক্ত গ্রুপগুলিতে বরাদ্দকে সীমাবদ্ধ করবে এবং সমস্ত বর্তমান &quot;প্রধান&quot; সদস্যদের এটি একটি অতিরিক্ত গ্রুপ হিসাবে আপডেট করবে।\\n\\nএটি বর্তমানে যে কোনও বোর্ডে এটি পরিচালনার জন্য বরাদ্দ করা হয়েছে সেই গ্রুপটিকে পরিচালকের পদ থেকে সরিয়ে দেবে।';
$txt['membergroups_edit_desc'] = 'গ্রুপের বর্ণনা';
$txt['membergroups_edit_group_type'] = 'গ্রুপের প্রকার';
$txt['membergroups_edit_select_group_type'] = 'গ্রুপের প্রকার নির্বাচন করুন';
$txt['membergroups_group_type_private'] = 'নিজি <span class="smalltext">(সদস্যপদ বরাদ্দ করতে হবে)</span>';
$txt['membergroups_group_type_protected'] = 'সুরক্ষিত <span class="smalltext">(শুধুমাত্র প্রশাসকরা পরিচালনা এবং বরাদ্দ করতে পারবেন)</span>';
$txt['membergroups_group_type_request'] = 'অনুরোধযোগ্য <span class="smalltext">(ব্যবহারকারী সদস্যপদ জন্য অনুরোধ করতে পারে)</span>';
$txt['membergroups_group_type_free'] = 'মুক্ত <span class="smalltext">(ব্যবহারকারী ইচ্ছা অনুযায়ী গ্রুপ ছাড়তে এবং যোগ দিতে পারে)</span>';
$txt['membergroups_group_type_post'] = 'পোস্ট ভিত্তিক <span class="smalltext">(সদস্যপদ পোস্টের সংখ্যা অনুযায়ী)</span>';
$txt['membergroups_min_posts'] = 'আবশ্যক পোস্ট';
$txt['membergroups_online_color'] = 'অনলাইন তালিকায় রঙ';
$txt['membergroups_icon_count'] = 'আইকন ছবির সংখ্যা';
$txt['membergroups_icon_image'] = 'আইকন ছবির ফাইলনাম';
$txt['membergroups_icon_image_note'] = 'আপনি এখানে নির্বাচন করার জন্য ফোরামের ডিফল্ট থিম ডিরেক্টরিতে কাস্টম ছবি আপলোড করতে পারেন। বিভিন্ন থিমে বিভিন্ন ছবি ব্যবহার করা যেতে পারে, শুধু একই নাম দিন।';
$txt['membergroups_icon_image_size'] = 'সর্বাধিক আকার অনুমোদিত 128x32px';
$txt['membergroups_max_messages'] = 'সর্বাধিক ব্যক্তিগত বার্তা';
$txt['membergroups_max_messages_note'] = '0 = অসীম';
$txt['membergroups_tfa_force'] = 'এই সদস্যগ্রুপের জন্য দুই-ফ্যাক্টর প্রমাণীকরণ (2FA) বাধ্যতামূলক করুন';
$txt['membergroups_tfa_force_note'] = 'আপনি এটি সক্রিয় করার আগে আপনার ব্যবহারকারীদের সতর্ক করতে নিশ্চিত হন!';
$txt['membergroups_edit_save'] = 'সংরক্ষণ করুন';
$txt['membergroups_delete'] = 'মুছে ফেলুন';
$txt['membergroups_confirm_delete'] = 'আপনি কি নিশ্চিত যে আপনি এই গ্রুপটি মুছে ফেলতে চান?';
$txt['membergroups_confirm_delete_mod'] = 'এই গ্রুপটি একটি বা একাধিক বোর্ড পরিচালনার জন্য বরাদ্দ করা হয়েছে। আপনি কি নিশ্চিত যে আপনি এটি মুছে ফেলতে চান?';
$txt['membergroups_swap_mod'] = 'এই গ্রুপটি একটি বা একাধিক বোর্ড পরিচালনার জন্য বরাদ্দ করা হয়েছে। এটি একটি পোস্ট গ্রুপে পরিবর্তন করলে সেই গ্রুপটি সেই বোর্ডগুলির পরিচালকের পদ থেকে বাদ পড়বে।';

$txt['membergroups_members_title'] = 'গ্রুপ দেখছেন';
$txt['membergroups_members_group_members'] = 'গ্রুপ সদস্য';
$txt['membergroups_members_no_members'] = 'এই গ্রুপটি বর্তমানে খালি';
$txt['membergroups_members_add_title'] = 'এই গ্রুপে একটি সদস্য যোগ করুন';
$txt['membergroups_members_add_desc'] = 'যোগ করার জন্য সদস্যের তালিকা';
$txt['membergroups_members_add'] = 'সদস্য যোগ করুন';
$txt['membergroups_members_remove'] = 'গ্রুপ থেকে সরান';
$txt['membergroups_members_last_active'] = 'শেষ সক্রিয়';
$txt['membergroups_members_additional_only'] = 'শুধুমাত্র অতিরিক্ত গ্রুপ হিসাবে যোগ করুন।';
$txt['membergroups_members_group_moderators'] = 'গ্রুপ পরিচালকেরা';
$txt['membergroups_members_description'] = 'বর্ণনা';
// Use javascript escaping in the below.
$txt['membergroups_members_deadmin_confirm'] = 'আপনি কি নিশ্চিত যে আপনি প্রশাসন গ্রুপ থেকে নিজেকে সরাতে চান?';

$txt['membergroups_postgroups'] = 'পোস্ট গ্রুপ';
$txt['membergroups_settings'] = 'সদস্যগ্রুপ সেটিংস';
$txt['groups_manage_membergroups'] = 'যেসব গ্রুপ সদস্যগ্রুপ পরিবর্তন করতে পারবে';
$txt['membergroups_select_permission_type'] = 'অনুমতি প্রোফাইল নির্বাচন করুন';
$txt['membergroups_images_url'] = 'Themes/default/images/membericons/';
$txt['membergroups_select_visible_boards'] = 'বোর্ড দেখান';
$txt['membergroups_members_top'] = 'সদস্য';
$txt['membergroups_name'] = 'নাম';
$txt['membergroups_icons'] = 'আইকন';

$txt['admin_browse_approve'] = 'সদস্য যাদের অ্যাকাউন্ট অনুমোদনের অপেক্ষায় আছে';
$txt['admin_browse_approve_desc'] = 'এখান থেকে আপনি সমস্ত সদস্য পরিচালনা করতে পারেন যারা তাদের অ্যাকাউন্ট অনুমোদনের অপেক্ষায় আছে।';
$txt['admin_browse_activate'] = 'সদস্য যাদের অ্যাকাউন্ট সক্রিয়করণের অপেক্ষায় আছে';
$txt['admin_browse_activate_desc'] = 'এই স্ক্রীনে আপনার ফোরামে এখনও যেসব সদস্য তাদের অ্যাকাউন্ট সক্রিয় করেনি তাদের তালিকা রয়েছে।';
$txt['admin_browse_awaiting_approval'] = 'অনুমোদনের অপেক্ষায় (%1$d)';
$txt['admin_browse_awaiting_activate'] = 'সক্রিয়করণের অপেক্ষায় (%1$d)';

$txt['admin_browse_username'] = 'ব্যবহারকারীর নাম';
$txt['admin_browse_email'] = 'ইমেইল ঠিকানা';
$txt['admin_browse_ip'] = 'আইপি ঠিকানা';
$txt['admin_browse_registered'] = 'নিবন্ধিত';
$txt['admin_browse_id'] = 'আইডি';
$txt['admin_browse_with_selected'] = 'নির্বাচিতদের সাথে';
$txt['admin_browse_no_members_approval'] = 'বর্তমানে কোন সদস্য অনুমোদনের অপেক্ষায় নেই।';
$txt['admin_browse_no_members_activate'] = 'বর্তমানে কোন সদস্য তাদের অ্যাকাউন্ট সক্রিয় করেনি।';

// Don't use entities in the below strings, except the main ones. (lt, gt, quot.)
$txt['admin_browse_warn'] = 'সমস্ত নির্বাচিত সদস্য?';
$txt['admin_browse_outstanding_warn'] = 'সমস্ত প্রভাবিত সদস্য?';
$txt['admin_browse_w_approve'] = 'অনুমোদন করুন';
$txt['admin_browse_w_activate'] = 'সক্রিয় করুন';
$txt['admin_browse_w_delete'] = 'মুছে ফেলুন';
$txt['admin_browse_w_reject'] = 'অস্বীকার করুন';
$txt['admin_browse_w_remind'] = 'স্মরণ করান';
$txt['admin_browse_w_approve_deletion'] = 'অনুমোদন করুন (অ্যাকাউন্ট মুছুন)';
$txt['admin_browse_w_email'] = 'এবং ইমেইল পাঠান';
$txt['admin_browse_no_email'] = '(কোন ইমেইল নেই)';
$txt['admin_browse_w_approve_require_activate'] = 'অনুমোদন করুন এবং সক্রিয়করণ আবশ্যক করুন';

$txt['admin_browse_filter_by'] = 'দ্বারা ফিল্টার করুন';
$txt['admin_browse_filter_show'] = 'প্রদর্শন করা হচ্ছে';
$txt['admin_browse_filter_type_0'] = 'সক্রিয় করা হয়নি নতুন অ্যাকাউন্ট';
$txt['admin_browse_filter_type_2'] = 'সক্রিয় করা হয়নি ইমেইল পরিবর্তন';
$txt['admin_browse_filter_type_3'] = 'অনুমোদনহীন নতুন অ্যাকাউন্ট';
$txt['admin_browse_filter_type_4'] = 'অনুমোদনহীন অ্যাকাউন্ট মুছুন';
$txt['admin_browse_filter_type_5'] = 'অনুমোদনহীন অপ্রাপ্তবয়স্ক অ্যাকাউন্ট';

$txt['admin_browse_outstanding'] = 'অবশিষ্ট সদস্য';
$txt['admin_browse_outstanding_days_1'] = 'সমস্ত সদস্যদের সাথে যারা নিবন্ধিত হয়েছে তার থেকে বেশি';
$txt['admin_browse_outstanding_days_2'] = 'দিন আগে';
$txt['admin_browse_outstanding_perform'] = 'নিচের পদক্ষেপ নিন';
$txt['admin_browse_outstanding_go'] = 'পদক্ষেপ নিন';

$txt['check_for_duplicate'] = 'ডুপ্লিকেটের জন্য পরীক্ষা করুন';
$txt['dont_check_for_duplicate'] = 'ডুপ্লিকেটের জন্য পরীক্ষা করবেন না';
$txt['duplicates'] = 'ডুপ্লিকেট';

$txt['not_activated'] = 'সক্রিয় করা হয়নি';

?>