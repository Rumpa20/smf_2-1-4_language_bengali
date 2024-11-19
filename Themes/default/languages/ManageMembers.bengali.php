<?php
 // সংস্করণ: 2.1.0;  সদস্যদের পরিচালনা করুন

 বিশ্বব্যাপী $প্রসঙ্গ;

 $txt['groups'] = 'গ্রুপ';
 $txt['viewing_groups'] = 'মেম্বার গ্রুপ দেখা';

 $txt['membergroups_title'] = 'সদস্যগোষ্ঠী পরিচালনা করুন';
 $txt['membergroups_description'] = 'মেম্বারগ্রুপ হল সদস্যদের গ্রুপ যাদের অনুরূপ অনুমতি সেটিংস, চেহারা, বা অ্যাক্সেসের অধিকার রয়েছে।  কিছু সদস্য গোষ্ঠী একজন ব্যবহারকারীর করা পোস্টের পরিমাণের উপর ভিত্তি করে।  আপনি কাউকে তাদের প্রোফাইল নির্বাচন করে এবং তাদের অ্যাকাউন্ট সেটিংস পরিবর্তন করে সদস্যগোষ্ঠীতে নিয়োগ করতে পারেন।';
 $txt['membergroups_modify'] = 'পরিবর্তন';

 $txt['membergroups_add_group'] = 'গ্রুপ যোগ করুন';
 $txt['membergroups_regular'] = 'নিয়মিত গ্রুপ';
 $txt['membergroups_post'] = 'পোস্ট কাউন্ট ভিত্তিক গ্রুপ';
 $txt['membergroups_guests_na'] = 'n/a';

 $txt['membergroups_group_name'] = 'সদস্যগোষ্ঠীর নাম';
 $txt['membergroups_new_board'] = 'দৃশ্যমান বোর্ড';
 $txt['membergroups_new_board_desc'] = 'সদস্যগোষ্ঠী দেখতে পারে এমন বোর্ড';
 $txt['membergroups_new_board_post_groups'] = '<em>দ্রষ্টব্য: সাধারণত, পোস্ট গ্রুপের অ্যাক্সেসের প্রয়োজন হয় না কারণ সদস্য যে গ্রুপে থাকবেন তারা তাদের অ্যাক্সেস দেবে।</em>';
 $txt['membergroups_new_as_inherit'] = 'এর থেকে উত্তরাধিকারী';
 $txt['membergroups_new_as_type'] = 'টাইপ অনুসারে';
 $txt['membergroups_new_as_copy'] = 'অফ ভিত্তিক';
 $txt['membergroups_new_copy_none'] = '(কোনটিই নয়)';
 $txt['membergroups_can_edit_later'] = 'আপনি এগুলি পরে সম্পাদনা করতে পারেন।';
 $txt['membergroups_can_manage_access'] = 'এই গ্রুপটি সব বোর্ড দেখতে পারে কারণ তাদের বোর্ড পরিচালনা করার ক্ষমতা আছে।';

 $txt['membergroups_cannot_delete_paid'] = 'এই গোষ্ঠীটি মুছে ফেলা যাবে না, এটি বর্তমানে নিম্নলিখিত অর্থ প্রদানের সদস্যতা(গুলি) দ্বারা ব্যবহার করা হচ্ছে: %1$s';

 $txt['membergroups_edit_group'] = 'সদস্যগোষ্ঠী সম্পাদনা করুন';
 $txt['membergroups_edit_name'] = 'গ্রুপের নাম';
 $txt['membergroups_edit_inherit_permissions'] = 'অনুমতি ইনহেরিট করুন';
 $txt['membergroups_edit_inherit_permissions_desc'] = '&quot;না' নির্বাচন করুন;  গ্রুপের নিজস্ব অনুমতি সেট করতে সক্ষম করা।';
 $txt['membergroups_edit_inherit_permissions_no'] = 'না - অনন্য অনুমতি ব্যবহার করুন';
 $txt['membergroups_edit_inherit_permissions_from'] = 'এর থেকে ইনহেরিট';
 $txt['membergroups_edit_hidden'] = 'দৃশ্যমানতা';
 $txt['membergroups_edit_hidden_no'] = 'দৃশ্যমান';
 $txt['membergroups_edit_hidden_boardindex'] = 'দৃশ্যমান - গ্রুপ কী ছাড়াও';
 $txt['membergroups_edit_hidden_all'] = 'অদৃশ্য';
 // নিচের স্ট্রিং-এ সাংখ্যিক সত্তা ব্যবহার করবেন না।
 $txt['membergroups_edit_hidden_warning'] = 'আপনি কি নিশ্চিত যে আপনি একটি ব্যবহারকারীর প্রাথমিক গোষ্ঠী হিসাবে এই গোষ্ঠীর অ্যাসাইনমেন্টকে অস্বীকৃতি জানাতে চান?\\n\\nএটি করলে কেবলমাত্র অতিরিক্ত গোষ্ঠীগুলিতে অ্যাসাইনমেন্ট সীমাবদ্ধ থাকবে এবং সমস্ত বর্তমান &quot;প্রাথমিক&quot; আপডেট হবে।  সদস্যদের এটিকে শুধুমাত্র একটি অতিরিক্ত গোষ্ঠী হিসাবে রাখতে হবে।\\n\\nএটি বর্তমানে মডারেটের জন্য নির্ধারিত যেকোন বোর্ড থেকে মডারেটর হিসাবে গ্রুপটিকে সরিয়ে দেবে।';
 $txt['membergroups_edit_desc'] = 'গ্রুপের বিবরণ';
 $txt['membergroups_edit_group_type'] = 'গ্রুপ টাইপ';
 $txt['membergroups_edit_select_group_type'] = 'গোষ্ঠীর ধরন নির্বাচন করুন';
 $txt['membergroups_group_type_private'] = 'ব্যক্তিগত <span class="smalltext">(সদস্যতা বরাদ্দ করা আবশ্যক)</span>';
 $txt['membergroups_group_type_protected'] = 'সুরক্ষিত <span class="smalltext">(শুধুমাত্র প্রশাসকরা পরিচালনা এবং বরাদ্দ করতে পারেন)</span>';
 $txt['membergroups_group_type_request'] = 'অনুরোধযোগ্য <span class="smalltext">(ব্যবহারকারী সদস্যতার অনুরোধ করতে পারে)</span>';
 $txt['membergroups_group_type_free'] = 'ফ্রি <span class="smalltext">(ব্যবহারকারী ইচ্ছামত গ্রুপ ছেড়ে যেতে এবং যোগ দিতে পারে)</span>';
 $txt['membergroups_group_type_post'] = 'পোস্ট ভিত্তিক <span class="smalltext">(পোস্টের সংখ্যার উপর ভিত্তি করে সদস্যপদ)</span>';
 $txt['membergroups_min_posts'] = 'প্রয়োজনীয় পোস্ট';
 $txt['membergroups_online_color'] = 'অনলাইন তালিকায় রঙ';
 $txt['membergroups_icon_count'] = 'আইকন ছবির সংখ্যা';
 $txt['membergroups_icon_image'] = 'আইকন ইমেজ ফাইলের নাম';
 $txt['membergroups_icon_image_note'] = 'আপনি ফোরামের ডিফল্ট থিম ডিরেক্টরিতে কাস্টম ছবি আপলোড করতে পারেন যাতে সেগুলিকে এখানে নির্বাচন করা যায়।  বিভিন্ন থিমে বিভিন্ন ছবি ব্যবহার করা যেতে পারে, শুধু তাদের একই নাম দিন।';
 $txt['membergroups_icon_image_size'] = 'সর্বোচ্চ আকার অনুমোদিত 128x32px';
 $txt['membergroups_max_messages'] = 'সর্বোচ্চ ব্যক্তিগত বার্তা';
 $txt['membergroups_max_messages_note'] = '0 = সীমাহীন';
 $txt['membergroups_tfa_force'] = 'এই সদস্যগোষ্ঠীর জন্য দুই-ফ্যাক্টর-অথেন্টিকেশন (2FA) বল করুন';
 $txt['membergroups_tfa_force_note'] = 'আপনি এটি সক্রিয় করার আগে আপনার ব্যবহারকারীদের সতর্ক করতে ভুলবেন না!';
 $txt['membergroups_edit_save'] = 'সংরক্ষণ করুন';
 $txt['membergroups_delete'] = 'মুছুন';
 $txt['membergroups_confirm_delete'] = 'আপনি কি নিশ্চিত যে আপনি এই গ্রুপটি মুছে ফেলতে চান?';
 $txt['membergroups_confirm_delete_mod'] = 'এই গোষ্ঠীটিকে এক বা একাধিক বোর্ড মডারেট করার জন্য নিযুক্ত করা হয়েছে।  আপনি কি নিশ্চিত আপনি এটি মুছে ফেলতে চান?';
 $txt['membergroups_swap_mod'] = 'এই গোষ্ঠীটিকে এক বা একাধিক বোর্ড মডারেট করার জন্য নিযুক্ত করা হয়েছে।  এটিকে একটি পোস্ট গ্রুপে পরিবর্তন করার ফলে সেই গ্রুপটি সেই বোর্ডের মডারেটর হিসাবে বাদ পড়বে।';

 $txt['membergroups_members_title'] = 'ভিউয়িং গ্রুপ';
 $txt['membergroups_members_group_members'] = 'গ্রুপ সদস্য';
 $txt['membergroups_members_no_members'] = 'এই গ্রুপটি বর্তমানে খালি';
 $txt['membergroups_members_add_title'] = 'এই গ্রুপে একজন সদস্য যোগ করুন';
 $txt['membergroups_members_add_desc'] = 'যোগ করার জন্য সদস্যদের তালিকা';
 $txt['membergroups_members_add'] = 'সদস্য যোগ করুন';
 $txt['membergroups_members_remove'] = 'গ্রুপ থেকে সরান';
 $txt['membergroups_members_last_active'] = 'শেষ সক্রিয়';
 $txt['membergroups_members_additional_only'] = 'শুধুমাত্র অতিরিক্ত গ্রুপ হিসেবে যোগ করুন।';
 $txt['membergroups_members_group_moderators'] = 'গ্রুপ মডারেটর';
 $txt['membergroups_members_description'] = 'বিবরণ';
 // নিচের জাভাস্ক্রিপ্ট এস্কেপিং ব্যবহার করুন।
 $txt['membergroups_members_deadmin_confirm'] = 'আপনি কি নিশ্চিত যে আপনি প্রশাসনিক গ্রুপ থেকে নিজেকে সরিয়ে দিতে চান?';

 $txt['membergroups_postgroups'] = 'পোস্ট গ্রুপ';
 $txt['membergroups_settings'] = 'মেম্বারগ্রুপ সেটিংস';
 $txt['groups_manage_membergroups'] = 'সদস্যগোষ্ঠী পরিবর্তন করার অনুমতি দেওয়া গোষ্ঠী';
 $txt['membergroups_select_permission_type'] = 'অনুমতি প্রোফাইল নির্বাচন করুন';
 $txt['membergroups_images_url'] = 'থিম/ডিফল্ট/ছবি/মেম্বারিকনস/';
 $txt['membergroups_select_visible_boards'] = 'বোর্ড দেখান';
 $txt['membergroups_members_top'] = 'সদস্য';
 $txt['membergroups_name'] = 'নাম';
 $txt['membergroups_icons'] = 'আইকন';

 $txt['admin_browse_approve'] = 'সদস্য যাদের অ্যাকাউন্ট অনুমোদনের জন্য অপেক্ষা করছে';
 $txt['admin_browse_approve_desc'] = 'এখান থেকে আপনি সমস্ত সদস্যদের পরিচালনা করতে পারবেন যারা তাদের অ্যাকাউন্ট অনুমোদিত হওয়ার অপেক্ষায় আছে।';
 $txt['admin_browse_activate'] = 'সদস্য যাদের অ্যাকাউন্ট সক্রিয়করণের জন্য অপেক্ষা করছে';
 $txt['admin_browse_activate_desc'] = 'এই স্ক্রীনে সেই সমস্ত সদস্যদের তালিকা রয়েছে যারা এখনও আপনার ফোরামে তাদের অ্যাকাউন্ট সক্রিয় করেনি।';
 $txt['admin_browse_awaiting_approval'] = 'অনুমোদনের অপেক্ষায় (%1$d)';
 $txt['admin_browse_awaiting_activate'] = 'অ্যাক্টিভেশনের অপেক্ষায় (%1$d)';

 $txt['admin_browse_username'] = 'ব্যবহারকারীর নাম';
 $txt['admin_browse_email'] = 'ইমেল ঠিকানা';
 $txt['admin_browse_ip'] = 'আইপি ঠিকানা';
 $txt['admin_browse_registered'] = 'নিবন্ধিত';
 $txt['admin_browse_id'] = 'ID';
 $txt['admin_browse_with_selected'] = 'নির্বাচিত সহ';
 $txt['admin_browse_no_members_approval'] = 'বর্তমানে কোনো সদস্য অনুমোদনের অপেক্ষায় নেই।';
 $txt['admin_browse_no_members_activate'] = 'বর্তমানে কোনো সদস্য তাদের অ্যাকাউন্ট সক্রিয় করেনি।';

 // প্রধানগুলি ছাড়া নীচের স্ট্রিংগুলিতে সত্তাগুলি ব্যবহার করবেন না।  (lt, gt, quot.)
 $txt['admin_browse_warn'] = 'সব নির্বাচিত সদস্য?';
 $txt['admin_browse_outstanding_warn'] = 'সব প্রভাবিত সদস্য?';
 $txt['admin_browse_w_approve'] = 'অনুমোদন';
 $txt['admin_browse_w_activate'] = 'সক্রিয় করুন';
 $txt['admin_browse_w_delete'] = 'মুছুন';
 $txt['admin_browse_w_reject'] = 'প্রত্যাখ্যান করুন';
 $txt['admin_browse_w_remind'] = 'মনে করিয়ে দিন';
 $txt['admin_browse_w_approve_deletion'] = 'অনুমোদন (অ্যাকাউন্ট মুছুন)';
 $txt['admin_browse_w_email'] = 'এবং ইমেল পাঠান';
 $txt['admin_browse_no_email'] = '(কোন ইমেল নেই)';
 $txt['admin_browse_w_approve_require_activate'] = 'অনুমোদন এবং সক্রিয়করণের প্রয়োজন';

 $txt['admin_browse_filter_by'] = 'ফিল্টার করে';
 $txt['admin_browse_filter_show'] = 'প্রদর্শন';
 $txt['admin_browse_filter_type_0'] = 'অসক্রিয় করা নতুন অ্যাকাউন্ট';
 $txt['admin_browse_filter_type_2'] = 'অসক্রিয় ইমেল পরিবর্তন';
 $txt['admin_browse_filter_type_3'] = 'অনুমোদিত নতুন অ্যাকাউন্ট';
 $txt['admin_browse_filter_type_4'] = 'অনুমোদিত অ্যাকাউন্ট মুছে ফেলা';
 $txt['admin_browse_filter_type_5'] = 'অনুমোদিত কম বয়সী অ্যাকাউন্ট';

 $txt['admin_browse_outstanding'] = 'অসামান্য সদস্য';
 $txt['admin_browse_outstanding_days_1'] = 'সকল সদস্যের সাথে যারা নিবন্ধন করেছেন তার বেশি সময় ধরে';
 $txt['admin_browse_outstanding_days_2'] = 'দিন আগে';
 $txt['admin_browse_outstanding_perform'] = 'নিম্নলিখিত ক্রিয়া সম্পাদন করুন';
 $txt['admin_browse_outstanding_go'] = 'কর্ম সম্পাদন করুন';

 $txt['check_for_duplicate'] = 'ডুপ্লিকেটের জন্য চেক করুন';
 $txt['dont_check_for_duplicate'] = 'ডুপ্লিকেট চেক করবেন না';
 $txt['duplicates'] = 'ডুপ্লিকেট';

 $txt['not_activated'] = 'সক্রিয় করা হয়নি';

 ?>