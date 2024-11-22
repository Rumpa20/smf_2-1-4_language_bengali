<?php
// Version: 2.1.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally, do not translate the @additional_params: line or the variable names in the lines that follow it. You may
//   translate the description of the variable. Do not translate @description:, however you may translate the rest of that line.

// Do not use block comments in this file, they will have special meaning.

global $txtBirthdayEmails;

/**
	@additional_params: resend_activate_message
		REALNAME: ইমেইল প্রাপ্ত সদস্যের প্রদর্শনী নাম।
		USERNAME:  ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		ACTIVATIONLINK:  সদস্যের অ্যাকাউন্ট সক্রিয় করার জন্য URL লিঙ্ক।
		ACTIVATIONCODE:  সদস্যের অ্যাকাউন্ট সক্রিয় করার জন্য প্রয়োজনীয় কোড।
		ACTIVATIONLINKWITHOUTCODE: সেই পৃষ্ঠার URL যেখানে সক্রিয়করণ কোড প্রবেশ করা যেতে পারে।
		FORGOTPASSWORDLINK: "পাসওয়ার্ড ভুলে গেছেন" পৃষ্ঠার URL।
	@description:
*/
$txt['resend_activate_message_subject'] = '{FORUMNAME} - এ আপনাকে স্বাগতম';
$txt['resend_activate_message_body'] = '{FORUMNAME} - এ নিবন্ধনের জন্য ধন্যবাদ। আপনার ব্যবহারকারীর নাম হলো {USERNAME}। যদি আপনি আপনার পাসওয়ার্ড ভুলে যান, তবে আপনি {FORGOTPASSWORDLINK} - এ গিয়ে এটি পুনরায় সেট করতে পারেন।

লগ ইন করার আগে, আপনাকে প্রথমে আপনার অ্যাকাউন্ট সক্রিয় করতে হবে নিচের লিঙ্কটি নির্বাচন করে:

{ACTIVATIONLINK}

যদি আপনার সক্রিয়করণের সাথে কোনো সমস্যা হয়, তাহলে দয়া করে {ACTIVATIONLINKWITHOUTCODE} - এ যান এবং কোডটি প্রবেশ করুন "{ACTIVATIONCODE}"।

{REGARDS}';

/**
	@additional_params: resend_pending_message
		REALNAME: ইমেইল প্রাপ্ত সদস্যের প্রদর্শনী নাম।
		USERNAME:  ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
	@description:
*/
$txt['resend_pending_message_subject'] = '{FORUMNAME} - এ আপনাকে স্বাগতম';
$txt['resend_pending_message_body'] = 'হ্যালো {REALNAME}, আপনার নিবন্ধনের অনুরোধ {FORUMNAME} - এ গ্রহণ করা হয়েছে।

আপনি যে ব্যবহারকারীর নাম দিয়ে নিবন্ধন করেছেন তা হলো {USERNAME}।

আপনি লগ ইন করতে এবং ফোরাম ব্যবহার শুরু করার আগে, আপনার অনুরোধ পর্যালোচনা এবং অনুমোদন করা হবে।

{REGARDS}';

/**
	@additional_params: mc_group_approve
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		GROUPNAME: সদস্যগোষ্ঠীর নাম যেখানে ব্যবহারকারীকে গৃহীত হয়েছে।
	@description: একটি নির্দিষ্ট সদস্যগোষ্ঠীতে যোগদানের অনুরোধ গৃহীত হয়েছে।
*/
$txt['mc_group_approve_subject'] = 'গোষ্ঠী সদস্যপদ অনুমোদন';
$txt['mc_group_approve_body'] = '{USERNAME},

আমরা আপনাকে জানাতে পেরে আনন্দিত যে আপনার "{GROUPNAME}" গোষ্ঠীতে যোগদানের আবেদন {FORUMNAME} - এ গৃহীত হয়েছে, এবং আপনার অ্যাকাউন্ট এই নতুন সদস্যগোষ্ঠী অন্তর্ভুক্ত করার জন্য আপডেট করা হয়েছে।

{REGARDS}';

/**
	@additional_params: mc_group_reject
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		GROUPNAME: সদস্যগোষ্ঠীর নাম যেখানে ব্যবহারকারীকে প্রত্যাখ্যাত হয়েছে।
	@description: একটি নির্দিষ্ট সদস্যগোষ্ঠীতে যোগদানের অনুরোধ প্রত্যাখ্যাত হয়েছে।
*/
$txt['mc_group_reject_subject'] = 'গোষ্ঠী সদস্যপদ প্রত্যাখ্যান';
$txt['mc_group_reject_body'] = '{USERNAME},

আমরা দুঃখিত যে আপনাকে জানাতে হচ্ছে যে আপনার "{GROUPNAME}" গোষ্ঠীতে যোগদানের আবেদন {FORUMNAME} - এ প্রত্যাখ্যাত হয়েছে।

{REGARDS}';

/**
	@additional_params: mc_group_reject_reason
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		GROUPNAME: সদস্যগোষ্ঠীর নাম যেখানে ব্যবহারকারীকে প্রত্যাখ্যাত হয়েছে।
		REASON: প্রত্যাখ্যানের কারণ।
	@description: একটি নির্দিষ্ট সদস্যগোষ্ঠীতে যোগদানের অনুরোধ একটি কারণ সহ প্রত্যাখ্যাত হয়েছে।
*/
$txt['mc_group_reject_reason_subject'] = 'গোষ্ঠী সদস্যপদ প্রত্যাখ্যান';
$txt['mc_group_reject_reason_body'] = '{USERNAME},

আমরা দুঃখিত যে আপনাকে জানাতে হচ্ছে যে আপনার "{GROUPNAME}" গোষ্ঠীতে যোগদানের আবেদন {FORUMNAME} - এ প্রত্যাখ্যাত হয়েছে।

এর কারণ হলো: {REASON}

{REGARDS}';

/**
	@additional_params: admin_approve_accept
		NAME: সদস্যের প্রদর্শন নাম।
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		PROFILELINK: প্রোফাইল পৃষ্ঠার URL।
		FORGOTPASSWORDLINK: "পাসওয়ার্ড ভুলে গেছেন" পৃষ্ঠার URL।
	@description:
*/
$txt['admin_approve_accept_subject'] = '{FORUMNAME} - এ স্বাগতম';
$txt['admin_approve_accept_body'] = 'স্বাগতম, {NAME}

আপনার অ্যাকাউন্টটি প্রশাসক দ্বারা ম্যানুয়ালি সক্রিয় করা হয়েছে এবং এখন আপনি লগ ইন করে পোস্ট করতে পারেন। আপনার ব্যবহারকারীর নাম হল: {USERNAME}। যদি আপনি আপনার পাসওয়ার্ড ভুলে যান, তবে আপনি এটি পরিবর্তন করতে পারেন এখানে: {FORGOTPASSWORDLINK}।

{REGARDS}';

/**
	@additional_params: admin_approve_activation
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		ACTIVATIONLINK: সদস্যের অ্যাকাউন্ট সক্রিয় করার জন্য URL লিঙ্ক।
		ACTIVATIONLINKWITHOUTCODE: সেই পৃষ্ঠার URL যেখানে সক্রিয়করণ কোড প্রবেশ করা যেতে পারে।
		ACTIVATIONCODE: সক্রিয়করণ কোড।
	@description:
*/
$txt['admin_approve_activation_subject'] = '{FORUMNAME} - এ স্বাগতম';
$txt['admin_approve_activation_body'] = 'স্বাগতম, {USERNAME}!

আপনার অ্যাকাউন্টটি {FORUMNAME} - এ ফোরামের প্রশাসক দ্বারা অনুমোদিত হয়েছে। লগ ইন করার আগে আপনাকে প্রথমে আপনার অ্যাকাউন্টটি সক্রিয় করতে হবে নিম্নলিখিত লিঙ্কটি নির্বাচন করে:

{ACTIVATIONLINK}

যদি সক্রিয়করণের সাথে কোনো সমস্যা হয়, তবে দয়া করে {ACTIVATIONLINKWITHOUTCODE} এ যান এবং কোডটি প্রবেশ করুন "{ACTIVATIONCODE}"।

{REGARDS}';

/**
	@additional_params: admin_approve_reject
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
	@description:
*/
$txt['admin_approve_reject_subject'] = 'নিবন্ধন প্রত্যাখ্যাত';
$txt['admin_approve_reject_body'] = '{USERNAME},

দুঃখের সাথে জানাচ্ছি যে আপনার {FORUMNAME} - এ যোগদানের আবেদন প্রত্যাখ্যাত হয়েছে।

{REGARDS}';

/**
	@additional_params: admin_approve_delete
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
	@description:
*/
$txt['admin_approve_delete_subject'] = 'অ্যাকাউন্ট মুছে ফেলা হয়েছে';
$txt['admin_approve_delete_body'] = '{USERNAME},

আপনার {FORUMNAME} - এ অ্যাকাউন্ট মুছে ফেলা হয়েছে। এটি হতে পারে কারণ আপনি আপনার অ্যাকাউন্টটি সক্রিয় করেননি, সেক্ষেত্রে আপনাকে আবার নিবন্ধন করার সুযোগ পাওয়া উচিত।

{REGARDS}';

/**
	@additional_params: admin_approve_remind
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		ACTIVATIONLINK: সদস্যের অ্যাকাউন্ট সক্রিয় করার জন্য URL লিঙ্ক।
		ACTIVATIONLINKWITHOUTCODE: সেই পৃষ্ঠার URL যেখানে সক্রিয়করণ কোড প্রবেশ করা যেতে পারে।
		ACTIVATIONCODE: সক্রিয়করণ কোড।
	@description:
*/
$txt['admin_approve_remind_subject'] = 'নিবন্ধনের স্মরণিকারী';
$txt['admin_approve_remind_body'] = '{USERNAME},
আপনি এখনও {FORUMNAME} - এ আপনার অ্যাকাউন্ট সক্রিয় করেননি।

অনুগ্রহ করে আপনার অ্যাকাউন্ট সক্রিয় করতে নিচের লিঙ্কটি ব্যবহার করুন:
{ACTIVATIONLINK}

যদি সক্রিয়করণের সাথে কোনো সমস্যা হয়, তবে দয়া করে {ACTIVATIONLINKWITHOUTCODE} এ যান এবং কোডটি প্রবেশ করুন "{ACTIVATIONCODE}"।

{REGARDS}';

/**
	@additional_params:
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		ACTIVATIONLINK: সদস্যের অ্যাকাউন্ট সক্রিয় করার জন্য URL লিঙ্ক।
		ACTIVATIONLINKWITHOUTCODE: সেই পৃষ্ঠার URL যেখানে সক্রিয়করণ কোড প্রবেশ করা যেতে পারে।
		ACTIVATIONCODE: সক্রিয়করণ কোড।
	@description:
*/
$txt['admin_register_activate_subject'] = '{FORUMNAME} - এ স্বাগতম';
$txt['admin_register_activate_body'] = '{FORUMNAME} - এ নিবন্ধনের জন্য ধন্যবাদ। আপনার ব্যবহারকারীর নাম হল {USERNAME} এবং আপনার পাসওয়ার্ড হল {PASSWORD}।

লগ ইন করার আগে আপনাকে প্রথমে আপনার অ্যাকাউন্টটি সক্রিয় করতে হবে নিম্নলিখিত লিঙ্কটি নির্বাচন করে:

{ACTIVATIONLINK}

যদি সক্রিয়করণের সাথে কোনো সমস্যা হয়, তবে দয়া করে {ACTIVATIONLINKWITHOUTCODE} এ যান এবং কোডটি প্রবেশ করুন "{ACTIVATIONCODE}"।

{REGARDS}';

$txt['admin_register_immediate_subject'] = '{FORUMNAME} - এ স্বাগতম';
$txt['admin_register_immediate_body'] = '{FORUMNAME} - এ নিবন্ধনের জন্য ধন্যবাদ। আপনার ব্যবহারকারীর নাম হল {USERNAME}, আপনার পাসওয়ার্ড হল {PASSWORD} এবং ফোরামের URL হল: {SCRIPTURL}।

{REGARDS}';

/**
	@additional_params: new_announcement
		TOPICSUBJECT: ঘোষিত বিষয়ের শিরোনাম।
		MESSAGE: ঘোষিত বিষয়ের প্রথম পোস্টের বার্তার শরীর।
		TOPICLINK: ঘোষিত বিষয়ের লিঙ্ক।
		UNSUBSCRIBELINK: ঘোষণাগুলি থেকে অবসন্ন করার লিঙ্ক।
	@description:
*/
$txt['new_announcement_subject'] = 'নতুন ঘোষণা: {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE}

আপনি সম্পূর্ণ ঘোষণা দেখতে এই লিঙ্কটি অনুসরণ করতে পারেন:
{TOPICLINK}

এই ঘোষণাগুলি থেকে অবসন্ন হতে, এই লিঙ্কটি অনুসরণ করুন:
{UNSUBSCRIBELINK}

আপনি যে ইমেইল বিজ্ঞপ্তিগুলি পান তা আরও নিয়ন্ত্রণের জন্য, ফোরামে লগ ইন করুন এবং আপনার প্রোফাইলে নোটিফিকেশন এলাকায় যান।

{REGARDS}';

/**
	@additional_params: notify_boards_once_body
		TOPICSUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		TOPICLINK: বিষয়ের একটি লিঙ্ক।
		MESSAGE: এটি বার্তার শরীর।
		UNSUBSCRIBELINK: বিজ্ঞপ্তিগুলি থেকে অবসন্ন করার লিঙ্ক।
	@description:
*/
$txt['notify_boards_once_body_subject'] = 'নতুন বিষয়: {TOPICSUBJECT}';
$txt['notify_boards_once_body_body'] = 'আপনি যে বোর্ডটি দেখছেন সেখানে একটি নতুন বিষয়, \'{TOPICSUBJECT}\', তৈরি হয়েছে।

আপনি এটি দেখতে পারেন
{TOPICLINK}

আরও বিষয় পোস্ট করা হতে পারে, কিন্তু আপনি এই বোর্ডের জন্য আরও ইমেইল বিজ্ঞপ্তি পাবেন না যতক্ষণ না আপনি বোর্ডে ফিরে যান এবং তাদের মধ্যে কিছু পড়েন।

বিষয়ের টেক্সট নিচে দেখানো হয়েছে:
{MESSAGE}

এই বোর্ডের নতুন বিষয়গুলি থেকে অবসন্ন হতে, এই লিঙ্কটি ব্যবহার করুন:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_once
		TOPICSUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		TOPICLINK: বিষয়ের একটি লিঙ্ক।
		UNSUBSCRIBELINK: বিজ্ঞপ্তিগুলি থেকে অবসন্ন করার লিঙ্ক।
	@description:
*/
$txt['notify_boards_once_subject'] = 'নতুন বিষয়: {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = 'আপনি যে বোর্ডটি দেখছেন সেখানে একটি নতুন বিষয়, \'{TOPICSUBJECT}\', তৈরি হয়েছে।

আপনি এটি দেখতে পারেন
{TOPICLINK}

আরও বিষয় পোস্ট করা হতে পারে, কিন্তু আপনি এই বোর্ডের জন্য আরও ইমেইল বিজ্ঞপ্তি পাবেন না যতক্ষণ না আপনি বোর্ডে ফিরে যান এবং তাদের মধ্যে কিছু পড়েন।

এই বোর্ডের নতুন বিষয়গুলি থেকে অবসন্ন হতে, এই লিঙ্কটি ব্যবহার করুন:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_body
		TOPICSUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		TOPICLINK: বিষয়ের একটি লিঙ্ক।
		MESSAGE: এটি বার্তার শরীর।
		UNSUBSCRIBELINK: বিজ্ঞপ্তিগুলি থেকে অবসন্ন করার লিঙ্ক।
	@description:
*/
$txt['notify_boards_body_subject'] = 'নতুন বিষয়: {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = 'আপনি যে বোর্ডটি দেখছেন সেখানে একটি নতুন বিষয়, \'{TOPICSUBJECT}\', তৈরি হয়েছে।

আপনি এটি দেখতে পারেন
{TOPICLINK}

বিষয়ের টেক্সট নিচে দেখানো হয়েছে:
{MESSAGE}

এই বোর্ডের নতুন বিষয়গুলি থেকে অবসন্ন হতে, এই লিঙ্কটি ব্যবহার করুন:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards
		TOPICSUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		TOPICLINK: বিষয়ের একটি লিঙ্ক।
		UNSUBSCRIBELINK: বিজ্ঞপ্তিগুলি থেকে অবসন্ন করার লিঙ্ক।
	@description:
*/
$txt['notify_boards_subject'] = 'নতুন বিষয়: {TOPICSUBJECT}';
$txt['notify_boards_body'] = 'আপনি যে বোর্ডটি দেখছেন সেখানে একটি নতুন বিষয়, \'{TOPICSUBJECT}\', তৈরি হয়েছে।

আপনি এটি দেখতে পারেন
{TOPICLINK}

এই বোর্ডের নতুন বিষয়গুলি থেকে অবসন্ন হতে, এই লিঙ্কটি ব্যবহার করুন:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: alert_unapproved_reply
		SUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		LINK: বিষয়ের একটি লিঙ্ক।
	@description:
*/
$txt['alert_unapproved_reply_subject'] = 'বিষয় উত্তর: {SUBJECT}';
$txt['alert_unapproved_reply_body'] = '\'{SUBJECT}\' - এ {POSTERNAME} দ্বারা একটি উত্তর পোস্ট করা হয়েছে।

আপনি এটি দেখতে পারেন
{LINK}

{REGARDS}';

/**
	@additional_params: unapproved_attachment
		SUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		LINK: সংযুক্তির সাথে বার্তার একটি লিঙ্ক।
	@description:
*/
$txt['unapproved_attachment_subject'] = 'নতুন অগ্রহণকৃত সংযুক্তি: {SUBJECT}';
$txt['unapproved_attachment_body'] = '\'{SUBJECT}\' - এ একটি নতুন সংযুক্তি তৈরি হয়েছে যা অনুমোদনের প্রয়োজন।

আপনি নীচের লিঙ্ক থেকে এই সংযুক্তিটি অনুমোদন বা প্রত্যাখ্যান করতে পারেন, যা আপনাকে সেই বার্তায় নিয়ে যাবে যার এটি একটি অংশ।

{LINK}

{REGARDS}';

/**
	@additional_params: alert_unapproved_post
		SUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		LINK: বিষয়ের একটি লিঙ্ক।
	@description:
*/
$txt['alert_unapproved_post_subject'] = 'নতুন অগ্রহণকৃত পোস্ট: {SUBJECT}';
$txt['alert_unapproved_post_body'] = 'একটি নতুন পোস্ট তৈরি হয়েছে যা অনুমোদনের প্রয়োজন: \'{SUBJECT}\'।

আপনি নীচের লিঙ্কটি ব্যবহার করে এই পোস্টটি অনুমোদন বা প্রত্যাখ্যান করতে পারেন:
{LINK}

{REGARDS}';

/**
	@additional_params: alert_unapproved_topic
		SUBJECT: বিজ্ঞপ্তির কারণ হওয়া বিষয়ের শিরোনাম।
		LINK: বিষয়ের একটি লিঙ্ক।
	@description:
*/
$txt['alert_unapproved_topic_subject'] = 'নতুন অগ্রহণকৃত বিষয়: {SUBJECT}';
$txt['alert_unapproved_topic_body'] = 'একটি নতুন বিষয় তৈরি হয়েছে যা অনুমোদনের প্রয়োজন: \'{SUBJECT}\'।

আপনি নীচের লিঙ্কটি ব্যবহার করে এই বিষয়টি অনুমোদন বা প্রত্যাখ্যান করতে পারেন:
{LINK}

{REGARDS}';

/**
	@additional_params: request_membership
		RECPNAME: ইমেইল প্রাপ্ত ব্যক্তির নাম
		APPLYNAME: গোষ্ঠী সদস্যপদের জন্য আবেদনকারী ব্যক্তির নাম
		GROUPNAME: যে গোষ্ঠীতে আবেদন করা হচ্ছে তার নাম।
		REASON: গোষ্ঠীতে যোগদানের জন্য আবেদনকারীর দেওয়া কারণ।
		MODLINK: গোষ্ঠীর পর্যবেক্ষণ পৃষ্ঠার লিঙ্ক।
	@description:
*/
$txt['request_membership_subject'] = 'নতুন গোষ্ঠী আবেদন';
$txt['request_membership_body'] = '{RECPNAME},

{APPLYNAME} "{GROUPNAME}" গোষ্ঠীতে সদস্যপদের জন্য আবেদন করেছে। ব্যবহারকারী নিম্নলিখিত কারণ দিয়েছে:

{REASON}

আপনি নীচের লিঙ্কটি ব্যবহার করে এই আবেদনের অনুমোদন বা প্রত্যাখ্যান করতে পারেন:

{MODLINK}

{REGARDS}';

/**
	@additional_params: paid_subscription
		REALNAME: ইমেইল প্রাপ্ত ব্যক্তির আসল (প্রদর্শন) নাম।
		PROFILE_LINK: সদস্যের প্রোফাইলের লিঙ্ক যিনি ইমেইল পাচ্ছেন যেখানে নবায়ন করতে পারেন।
		SUBSCRIPTION: সাবস্ক্রিপশনের নাম।
		END_DATE: এটি কখন শেষ হচ্ছে।
	@description:
*/
$txt['paid_subscription_reminder_subject'] = '{FORUMNAME} এ সাবস্ক্রিপশন শেষ হতে চলেছে';
$txt['paid_subscription_reminder_body'] = '{REALNAME},

আপনার {FORUMNAME} এ সাবস্ক্রিপশন শেষ হতে চলেছে। যদি আপনি স্বয়ংক্রিয়ভাবে নবায়ন করার জন্য নির্বাচিত হয়ে থাকেন, তাহলে আপনাকে কোনো পদক্ষেপ নিতে হবে না; অন্যথায়, আপনি আবার সাবস্ক্রাইব করার কথা বিবেচনা করতে পারেন। বিস্তারিত নীচে:

সাবস্ক্রিপশনের নাম: {SUBSCRIPTION}
সমাপ্তির তারিখ: {END_DATE}

আপনার সাবস্ক্রিপশন সম্পাদনা করতে নিম্নলিখিত URL পরিদর্শন করুন:
{PROFILE_LINK}

{REGARDS}';

/**
	@additional_params: activate_reactivate
		ACTIVATIONLINK: সদস্যের অ্যাকাউন্ট পুনরায় সক্রিয় করার জন্য URL লিঙ্ক।
		ACTIVATIONCODE: সদস্যের অ্যাকাউন্ট পুনরায় সক্রিয় করার জন্য প্রয়োজনীয় কোড।
		ACTIVATIONLINKWITHOUTCODE: পৃষ্ঠার URL যেখানে সক্রিয়করণ কোড প্রবেশ করা যেতে পারে।
	@description:
*/
$txt['activate_reactivate_subject'] = '{FORUMNAME} এ স্বাগতম';
$txt['activate_reactivate_body'] = 'আপনার ইমেইল ঠিকানা পুনরায় যাচাই করার জন্য, আপনার অ্যাকাউন্ট নিষ্ক্রিয় করা হয়েছে। এটি আবার সক্রিয় করতে নিম্নলিখিত লিঙ্কে ক্লিক করুন:
{ACTIVATIONLINK}

যদি সক্রিয়করণের সাথে কোনো সমস্যা হয়, তাহলে দয়া করে {ACTIVATIONLINKWITHOUTCODE} পরিদর্শন করুন এবং কোড "{ACTIVATIONCODE}" ব্যবহার করুন।

{REGARDS}';

/**
	@additional_params: forgot_password
		REALNAME: অনুস্মারক প্রাপ্ত ব্যক্তির আসল (প্রদর্শন) নাম।
		REMINDLINK: পাসওয়ার্ড পুনরায় সেট করার লিঙ্ক।
		IP: অনুরোধকারীর IP ঠিকানা।
		MEMBERNAME: 
	@description:
*/
$txt['forgot_password_subject'] = '{FORUMNAME} এর জন্য নতুন পাসওয়ার্ড';
$txt['forgot_password_body'] = 'প্রিয় {REALNAME},
এই ইমেইলটি আপনার অ্যাকাউন্টের জন্য \'পাসওয়ার্ড ভুলে গেছেন\' ফাংশনটি প্রয়োগ করা হয়েছে বলে পাঠানো হয়েছে। নতুন পাসওয়ার্ড সেট করতে, নিম্নলিখিত লিঙ্কে ক্লিক করুন:
{REMINDLINK}

IP: {IP}
ব্যবহারকারীর নাম: {MEMBERNAME}

{REGARDS}';

/**
	@additional_params: send_email
		EMAILSUBJECT: ব্যবহারকারী যে বিষয়টি ইমেইল করতে চান।
		EMAILBODY: ব্যবহারকারী যে বিষয়বস্তু ইমেইল করতে চান।
		SENDERNAME: ইমেইল পাঠানো সদস্যের নাম।
		RECPNAME: ইমেইল প্রাপ্ত ব্যক্তির নাম।
	@description:
*/
$txt['send_email_subject'] = '{EMAILSUBJECT}';
$txt['send_email_body'] = '{EMAILBODY}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: রিপোর্ট করা পোস্টের বিষয়।
		POSTERNAME: রিপোর্ট করা পোস্টের লেখকের নাম।
		REPORTERNAME: পোস্টটি রিপোর্ট করা ব্যক্তির নাম।
		TOPICLINK: রিপোর্ট করা পোস্টের URL।
		REPORTLINK: পরিচালনার কেন্দ্রের রিপোর্টের URL।
		COMMENT: রিপোর্টকারীর দেওয়া মন্তব্য, আশা করা যায় যে তারা কেন পোস্টটি রিপোর্ট করছেন তা ব্যাখ্যা করবে।
	@description: যখন একজন ব্যবহারকারী একটি পোস্ট রিপোর্ট করেন, তখন এই ইমেইলটি পরিচালকদের এবং সেই বোর্ডের প্রশাসকদের পাঠানো হয়।
*/
$txt['report_to_moderator_subject'] = 'রিপোর্ট করা পোস্ট: {TOPICSUBJECT} দ্বারা {POSTERNAME}';
$txt['report_to_moderator_body'] = 'নিচের পোস্টটি, "{TOPICSUBJECT}" {POSTERNAME} দ্বারা রিপোর্ট করা হয়েছে {REPORTERNAME} এর দ্বারা একটি বোর্ডে যা আপনি পরিচালনা করেন:

বিষয়টি: {TOPICLINK}
পরিচালনার কেন্দ্র: {REPORTLINK}

রিপোর্টকারী নিম্নলিখিত মন্তব্য করেছেন:
{COMMENT}

{REGARDS}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: রিপোর্ট করা পোস্টের বিষয়।
		POSTERNAME: রিপোর্ট করা পোস্টের লেখকের নাম।
		COMMENTERNAME: রিপোর্টের প্রতি উত্তর দেওয়া ব্যক্তির নাম।
		TOPICLINK: রিপোর্ট করা পোস্টের URL।
		REPORTLINK: পরিচালনার কেন্দ্রের রিপোর্টের URL।
	@description: যখন একজন পরিচালকের রিপোর্টের প্রতি উত্তর দেন, তখন এটি পূর্বে উত্তর দেওয়া অন্যান্য পরিচালকদের কাছে পাঠানো যেতে পারে।
*/
$txt['reply_to_moderator_subject'] = 'রিপোর্ট করা পোস্টের ফলো-আপ: {TOPICSUBJECT} দ্বারা {POSTERNAME}';
$txt['reply_to_moderator_body'] = 'পূর্বে, "{TOPICSUBJECT}" পরিচালকদের কাছে রিপোর্ট করা হয়েছিল।

এরপর, {COMMENTERNAME} রিপোর্টে একটি মন্তব্য যোগ করেছেন। আরও তথ্য ফোরামে পাওয়া যাবে।

বিষয়টি: {TOPICLINK}
পরিচালনার কেন্দ্র: {REPORTLINK}

{REGARDS}';

/**
	@additional_params: report_user_profile
		MEMBERNAME: রিপোর্ট করা ব্যবহারকারীর প্রদর্শন নাম
		REPORTERNAME: প্রোফাইল রিপোর্ট করা ব্যক্তির নাম
		PROFILELINK: রিপোর্ট করা প্রোফাইলের লিঙ্ক
		COMMENT: রিপোর্টকারী দ্বারা দেওয়া মন্তব্য।
 	@description: যখন একটি ব্যবহারকারীর প্রোফাইল রিপোর্ট করা হয়
*/
$txt['report_member_profile_subject'] = 'রিপোর্ট করা প্রোফাইল: {MEMBERNAME}';
$txt['report_member_profile_body'] = '"{MEMBERNAME}" এর প্রোফাইলটি {REPORTERNAME} দ্বারা রিপোর্ট করা হয়েছে।

প্রোফাইল: {PROFILELINK}
পরিচালনার কেন্দ্র: {REPORTLINK}

রিপোর্টকারী নিম্নলিখিত মন্তব্য করেছেন:
{COMMENT}

{REGARDS}';

/**
	@additional_params: report_user_profile
		MEMBERNAME: রিপোর্ট করা ব্যবহারকারীর প্রদর্শন নাম
		COMMENTERNAME: মন্তব্য যুক্ত করা ব্যক্তির নাম
		PROFILELINK: রিপোর্ট করা প্রোফাইলের লিঙ্ক
 	@description: যখন কেউ একটি প্রোফাইল সম্পর্কে রিপোর্টের উত্তর দেয়, এটি সেই সকলকে পাঠানো যেতে পারে যারা উত্তর দিয়েছে
*/
$txt['reply_to_member_report_subject'] = 'প্রতিবেদনকৃত প্রোফাইলের জন্য ফলো-আপ: {MEMBERNAME}';
$txt['reply_to_member_report_body'] = 'আগে, {MEMBERNAME} এর প্রোফাইল রিপোর্ট করা হয়েছিল।

এরপর, {COMMENTERNAME} রিপোর্টে একটি মন্তব্য যুক্ত করেছেন। আরও তথ্য ফোরামে পাওয়া যাবে।

প্রোফাইল: {PROFILELINK}
মডারেশন কেন্দ্র: {REPORTLINK}

{REGARDS}';

/**
	@additional_params: change_password
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		PASSWORD: সদস্যের জন্য পাসওয়ার্ড।
	@description:
*/
$txt['change_password_subject'] = 'নতুন পাসওয়ার্ডের বিস্তারিত';
$txt['change_password_body'] = 'প্রিয় {USERNAME},

{FORUMNAME} এ আপনার লগইন বিস্তারিত পরিবর্তন করা হয়েছে এবং আপনার পাসওয়ার্ড পুনরায় সেট করা হয়েছে। আপনার নতুন লগইন বিস্তারিত নিচে দেওয়া হল।

আপনার ব্যবহারকারীর নাম হলো "{USERNAME}" এবং আপনার পাসওয়ার্ড হলো "{PASSWORD}"।

আপনি লগ ইন করার পর আপনার প্রোফাইল পেজে গিয়ে এটি পরিবর্তন করতে পারেন, অথবা লগ ইন করার পর এই পৃষ্ঠায় গিয়ে:
{SCRIPTURL}?action=profile

{REGARDS}';

/**
	@additional_params: register_activate
		REALNAME: ইমেইল প্রাপ্ত সদস্যের প্রদর্শন নাম।
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		PASSWORD: সদস্যের জন্য পাসওয়ার্ড।
		ACTIVATIONLINK: সদস্যের অ্যাকাউন্ট পুনরায় সক্রিয় করার জন্য URL লিঙ্ক।
		ACTIVATIONLINKWITHOUTCODE: সেই পৃষ্ঠার URL যেখানে সক্রিয়করণ কোড প্রবেশ করা যেতে পারে।
		ACTIVATIONCODE: সদস্যের অ্যাকাউন্ট পুনরায় সক্রিয় করার জন্য প্রয়োজনীয় কোড।
		FORGOTPASSWORDLINK: "পাসওয়ার্ড ভুলে গেছেন" পৃষ্ঠার URL।
	@description:
*/
$txt['register_activate_subject'] = '{FORUMNAME} এ আপনাকে স্বাগতম';
$txt['register_activate_body'] = 'আমাদের কাছে নিবন্ধনের জন্য ধন্যবাদ {FORUMNAME}। আপনার ব্যবহারকারীর নাম হলো {USERNAME}। যদি আপনি আপনার পাসওয়ার্ড ভুলে যান, তবে আপনি {FORGOTPASSWORDLINK} এ গিয়ে এটি পুনরায় সেট করতে পারেন।

আপনি লগ ইন করার আগে আপনাকে প্রথমে আপনার অ্যাকাউন্ট সক্রিয় করতে হবে। এটি করতে, দয়া করে এই লিঙ্কটি অনুসরণ করুন:

{ACTIVATIONLINK}

যদি আপনার সক্রিয়করণের সাথে কোন সমস্যা হয়, তবে দয়া করে {ACTIVATIONLINKWITHOUTCODE} এ যান এবং কোড "{ACTIVATIONCODE}" ব্যবহার করুন।

{REGARDS}';

/**
	@additional_params: register_coppa
		REALNAME: ইমেইল প্রাপ্ত সদস্যের প্রদর্শন নাম।
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		PASSWORD: সদস্যের জন্য পাসওয়ার্ড।
		COPPALINK: কোপ্পা ফর্মের জন্য URL লিঙ্ক।
		FORGOTPASSWORDLINK: "পাসওয়ার্ড ভুলে গেছেন" পৃষ্ঠার URL।
	@description:
*/
$txt['register_coppa_subject'] = '{FORUMNAME} এ আপনাকে স্বাগতম';
$txt['register_coppa_body'] = 'আমাদের কাছে নিবন্ধনের জন্য ধন্যবাদ {FORUMNAME}। আপনার ব্যবহারকারীর নাম হলো {USERNAME}। যদি আপনি আপনার পাসওয়ার্ড ভুলে যান, তবে আপনি এটি {FORGOTPASSWORDLINK} এ পরিবর্তন করতে পারেন।

আপনি লগ ইন করার আগে, প্রশাসকের কাছ থেকে আপনার পিতা/অভিভাবকের সম্মতি প্রয়োজন যাতে আপনি সম্প্রদায়ে যোগদান করতে পারেন। আরও তথ্যের জন্য নিচের লিঙ্কটি দেখুন:

{COPPALINK}

{REGARDS}';

/**
	@additional_params: register_immediate
		REALNAME: ইমেইল প্রাপ্ত সদস্যের প্রদর্শন নাম।
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		PASSWORD: সদস্যের জন্য পাসওয়ার্ড।
		FORGOTPASSWORDLINK: "পাসওয়ার্ড ভুলে গেছেন" পৃষ্ঠার URL।
	@description:
*/
$txt['register_immediate_subject'] = '{FORUMNAME} এ আপনাকে স্বাগতম';
$txt['register_immediate_body'] = 'আমাদের কাছে নিবন্ধনের জন্য ধন্যবাদ {FORUMNAME}। আপনার ব্যবহারকারীর নাম হলো {USERNAME}। যদি আপনি আপনার পাসওয়ার্ড ভুলে যান, তবে আপনি এটি {FORGOTPASSWORDLINK} এ পরিবর্তন করতে পারেন।

{REGARDS}';

/**
	@additional_params: register_pending
		REALNAME: ইমেইল প্রাপ্ত সদস্যের প্রদর্শন নাম।
		USERNAME: ইমেইল প্রাপ্ত সদস্যের ব্যবহারকারীর নাম।
		PASSWORD: সদস্যের জন্য পাসওয়ার্ড।
		FORGOTPASSWORDLINK: "পাসওয়ার্ড ভুলে গেছেন" পৃষ্ঠার URL।
	@description:
*/
$txt['register_pending_subject'] = '{FORUMNAME} এ আপনাকে স্বাগতম';
$txt['register_pending_body'] = 'হ্যালো {REALNAME}, আপনার নিবন্ধন অনুরোধ {FORUMNAME} এ গ্রহণ করা হয়েছে।

আপনার নিবন্ধনের জন্য ব্যবহারকারীর নাম ছিল {USERNAME}। যদি আপনি আপনার পাসওয়ার্ড ভুলে যান, তবে আপনি এটি {FORGOTPASSWORDLINK} এ পরিবর্তন করতে পারেন।

আপনি লগ ইন করে ফোরাম ব্যবহার শুরু করার আগে, আপনার অনুরোধটি পর্যালোচনা ও অনুমোদন করা হবে।

{REGARDS}';

/**
	@additional_params: notification_reply
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_subject'] = 'বিষয় উত্তর: {TOPICSUBJECT}';
$txt['notification_reply_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেখানে {POSTERNAME} দ্বারা একটি উত্তর পোস্ট করা হয়েছে।

উত্তরটি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_reply_body
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_subject'] = 'বিষয় উত্তর: {TOPICSUBJECT}';
$txt['notification_reply_body_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেখানে {POSTERNAME} দ্বারা একটি উত্তর পোস্ট করা হয়েছে।

উত্তরটি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

উত্তরের পাঠ্য নিচে দেখানো হয়েছে:
{MESSAGE}

{REGARDS}';

/**
	@additional_params: notification_reply_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_once_subject'] = 'বিষয় উত্তর: {TOPICSUBJECT}';
$txt['notification_reply_once_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেখানে {POSTERNAME} দ্বারা একটি উত্তর পোস্ট করা হয়েছে।

উত্তরটি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

আরও উত্তর পোস্ট করা হতে পারে, তবে আপনি এই বিষয়ে আর কোন নোটিফিকেশন পাবেন না যতক্ষণ না আপনি এটি পরিদর্শন করেন।

{REGARDS}';

/**
	@additional_params: notification_reply_body_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_once_subject'] = 'বিষয় উত্তর: {TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেখানে {POSTERNAME} দ্বারা একটি উত্তর পোস্ট করা হয়েছে।

উত্তরটি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

উত্তরের পাঠ্য নিচে দেখানো হয়েছে:
{MESSAGE}

আরও উত্তর পোস্ট করা হতে পারে, তবে আপনি এই বিষয়ে আর কোন নোটিফিকেশন পাবেন না যতক্ষণ না আপনি এটি পরিদর্শন করেন।

{REGARDS}';

/**
	@additional_params: notification_sticky
	@description:
*/
$txt['notification_sticky_subject'] = 'বিষয় স্টিকি করা হয়েছে: {TOPICSUBJECT}';
$txt['notification_sticky_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেটি স্টিকি বিষয় হিসাবে চিহ্নিত করা হয়েছে।

বিষয়টি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_lock
	@description:
*/
$txt['notification_lock_subject'] = 'বিষয় লক করা হয়েছে: {TOPICSUBJECT}';
$txt['notification_lock_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেটি লক করা হয়েছে।

বিষয়টি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_unlock
	@description:
*/
$txt['notification_unlock_subject'] = 'বিষয় আনলক করা হয়েছে: {TOPICSUBJECT}';
$txt['notification_unlock_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেটি আনলক করা হয়েছে।

বিষয়টি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_remove
	@description:
*/
$txt['notification_remove_subject'] = 'বিষয় সরিয়ে ফেলা হয়েছে: {TOPICSUBJECT}';
$txt['notification_remove_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেটি সরিয়ে ফেলা হয়েছে।

{REGARDS}';

/**
	@additional_params: notification_move
	@description:
*/
$txt['notification_move_subject'] = 'বিষয় স্থানান্তরিত হয়েছে: {TOPICSUBJECT}';
$txt['notification_move_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেটি অন্য বোর্ডে স্থানান্তরিত হয়েছে।

বিষয়টি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_merged
	@description:
*/
$txt['notification_merge_subject'] = 'বিষয় একত্রিত হয়েছে: {TOPICSUBJECT}';
$txt['notification_merge_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেটি অন্য একটি বিষয়ের সাথে একত্রিত করা হয়েছে।

নতুন একত্রিত বিষয়টি দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_split
	@description:
*/
$txt['notification_split_subject'] = 'বিষয় বিভক্ত হয়েছে: {TOPICSUBJECT}';
$txt['notification_split_body'] = 'আপনি যে বিষয়ে নজর রাখছেন, সেটি দুটি বা তার বেশি বিষয়ে বিভক্ত হয়েছে।

এই বিষয়ের অবশিষ্ট অংশ দেখুন: {TOPICLINK}

এই বিষয় থেকে অবসর নিতে এই লিঙ্কটি ব্যবহার করুন: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: admin_notify
		USERNAME:
		PROFILELINK:
	@description:
*/
$txt['admin_notify_subject'] = 'একজন নতুন সদস্য যোগদান করেছেন';
$txt['admin_notify_body'] = '{USERNAME} আপনার ফোরামে একজন নতুন সদস্য হিসেবে সাইন আপ করেছেন। তাদের প্রোফাইল দেখার জন্য নিচের লিঙ্কে ক্লিক করুন।
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: admin_notify_approval
		USERNAME:
		PROFILELINK:
		APPROVALLINK:
	@description:
*/
$txt['admin_notify_approval_subject'] = 'একটি নতুন সদস্য যুক্ত হয়েছে';
$txt['admin_notify_approval_body'] = '{USERNAME} আপনার ফোরামে নতুন সদস্য হিসেবে সাইন আপ করেছেন। তাদের প্রোফাইল দেখতে নিচের লিঙ্কে ক্লিক করুন।
{PROFILELINK}

এই সদস্য প্রথমে তাদের অ্যাকাউন্ট অনুমোদিত হওয়া প্রয়োজন যাতে তারা পোস্ট করতে পারে। অনুমোদন স্ক্রীনে যাওয়ার জন্য নিচের লিঙ্কে ক্লিক করুন।
{APPROVALLINK}

{REGARDS}';

/**
	@additional_params: admin_attachments_full
		REALNAME:
	@description:
*/
$txt['admin_attachments_full_subject'] = 'জরুরি! সংযুক্তি ডিরেক্টরি প্রায় পূর্ণ';
$txt['admin_attachments_full_body'] = '{REALNAME},

{FORUMNAME} এ সংযুক্তি ডিরেক্টরি প্রায় পূর্ণ। এই সমস্যাটি সমাধান করার জন্য দয়া করে ফোরামে যান।

যখন সংযুক্তি ডিরেক্টরি তার সর্বাধিক অনুমোদিত আকারে পৌঁছাবে, ব্যবহারকারীরা সংযুক্তি পোস্ট করতে বা কাস্টম অ্যাভাটার আপলোড করতে পারবেন না (যদি সক্ষম থাকে)।

{REGARDS}';

/**
	@additional_params: paid_subscription_refund
		NAME: সাবস্ক্রিপশন শিরোনাম।
		REALNAME: প্রাপকের নাম
		REFUNDUSER: সাবস্ক্রিপশন নেওয়া ব্যবহারকারীর নাম।
		REFUNDNAME: সাবস্ক্রিপশন নেওয়া ব্যবহারকারীর প্রদর্শন নাম।
		DATE: আজকের তারিখ।
		PROFILELINK: সদস্যের প্রোফাইলের লিঙ্ক।
	@description:
*/
$txt['paid_subscription_refund_subject'] = 'ফেরত দেওয়া পেইড সাবস্ক্রিপশন';
$txt['paid_subscription_refund_body'] = '{REALNAME},

একজন সদস্য একটি পেইড সাবস্ক্রিপশনে ফেরত পেয়েছেন। এই সাবস্ক্রিপশনের বিস্তারিত নিচে দেওয়া হলো:

	সাবস্ক্রিপশন: {NAME}
	ব্যবহারকারীর নাম: {REFUNDNAME} ({REFUNDUSER})
	তারিখ: {DATE}

নিচের লিঙ্কে ক্লিক করে এই সদস্যের প্রোফাইল দেখুন:
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_new
		NAME: সাবস্ক্রিপশন শিরোনাম।
		REALNAME: প্রাপকের নাম
		SUBEMAIL: সাবস্ক্রিপশন নেওয়া ব্যবহারকারীর ইমেইল ঠিকানা
		SUBUSER: সাবস্ক্রিপশন নেওয়া ব্যবহারকারীর নাম।
		SUBNAME: সাবস্ক্রিপশন নেওয়া ব্যবহারকারীর প্রদর্শন নাম।
		DATE: আজকের তারিখ।
		PROFILELINK: সদস্যের প্রোফাইলের লিঙ্ক।
	@description:
*/
$txt['paid_subscription_new_subject'] = 'নতুন পেইড সাবস্ক্রিপশন';
$txt['paid_subscription_new_body'] = '{REALNAME},

একজন সদস্য একটি নতুন পেইড সাবস্ক্রিপশন নিয়েছেন। এই সাবস্ক্রিপশনের বিস্তারিত নিচে দেওয়া হলো:

	সাবস্ক্রিপশন: {NAME}
	ব্যবহারকারীর নাম: {SUBNAME} ({SUBUSER})
	ব্যবহারকারীর ইমেইল: {SUBEMAIL}
	মূল্য: {PRICE}
	তারিখ: {DATE}

নিচের লিঙ্কে ক্লিক করে এই সদস্যের প্রোফাইল দেখুন:
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_error
		ERROR: ত্রুটি বার্তা।
		REALNAME: প্রাপকের নাম
	@description:
*/
$txt['paid_subscription_error_subject'] = 'পেইড সাবস্ক্রিপশন ত্রুটি ঘটেছে';
$txt['paid_subscription_error_body'] = 'প্রিয় {REALNAME},

একটি পেইড সাবস্ক্রিপশন প্রক্রিয়া করার সময় নিম্নলিখিত ত্রুটি ঘটেছে
---------------------------------------------------------------
{ERROR}

{REGARDS}';

/**
	@additional_params: new_pm
		SUBJECT: ব্যক্তিগত বার্তার বিষয়।
		SENDER:  ব্যক্তিগত বার্তা পাঠানো সদস্যের ব্যবহারকারীর নাম।
		READLINK:  পড়ার পৃষ্ঠায় সরাসরি প্রবেশের লিঙ্ক।
		REPLYLINK:  উত্তর দেওয়ার পৃষ্ঠায় সরাসরি প্রবেশের লিঙ্ক।
	@description: ব্যক্তিগত বার্তার প্রাপককে পাঠানো একটি বিজ্ঞপ্তি ইমেইল
*/
$txt['new_pm_subject'] = 'নতুন ব্যক্তিগত বার্তা: {SUBJECT}';
$txt['new_pm_body'] = 'আপনাকে {SENDER} দ্বারা {FORUMNAME} এ একটি ব্যক্তিগত বার্তা পাঠানো হয়েছে।

গুরুতর: মনে রাখবেন, এটি শুধুমাত্র একটি বিজ্ঞপ্তি। দয়া করে এই ইমেইলে উত্তর দেবেন না।

এই ব্যক্তিগত বার্তাটি পড়ুন এখানে: {READLINK}

এই ব্যক্তিগত বার্তায় উত্তর দিন এখানে: {REPLYLINK}

{REGARDS}';

/**
	@additional_params: new_pm_body
		SUBJECT: ব্যক্তিগত বার্তার বিষয়।
		SENDER:  ব্যক্তিগত বার্তা পাঠানো সদস্যের ব্যবহারকারীর নাম।
		MESSAGE:  ব্যক্তিগত বার্তার পাঠ্য।
		REPLYLINK:  উত্তর দেওয়ার পৃষ্ঠায় সরাসরি প্রবেশের লিঙ্ক।
	@description: ব্যক্তিগত বার্তার প্রাপককে পাঠানো একটি বিজ্ঞপ্তি ইমেইল
*/
$txt['new_pm_body_subject'] = 'নতুন ব্যক্তিগত বার্তা: {SUBJECT}';
$txt['new_pm_body_body'] = 'আপনাকে {SENDER} দ্বারা {FORUMNAME} এ একটি ব্যক্তিগত বার্তা পাঠানো হয়েছে।

গুরুতর: মনে রাখবেন, এটি শুধুমাত্র একটি বিজ্ঞপ্তি। দয়া করে এই ইমেইলে উত্তর দেবেন না।

তারা আপনাকে যে বার্তাটি পাঠিয়েছে তা হল:

{MESSAGE}

এই ব্যক্তিগত বার্তায় উত্তর দিন এখানে: {REPLYLINK}

{REGARDS}';

/**
	@additional_params: new_pm_tolist
		SUBJECT: ব্যক্তিগত বার্তার বিষয়।
		SENDER:  ব্যক্তিগত বার্তা পাঠানো সদস্যের ব্যবহারকারীর নাম।
		READLINK:  পড়ার পৃষ্ঠায় সরাসরি প্রবেশের লিঙ্ক।
		REPLYLINK:  উত্তর দেওয়ার পৃষ্ঠায় সরাসরি প্রবেশের লিঙ্ক।
		TOLIST:  যাদেরকে ব্যক্তিগত বার্তা পাঠানো হবে তাদের তালিকা।
	@description: ব্যক্তিগত বার্তার প্রাপককে পাঠানো একটি বিজ্ঞপ্তি ইমেইল
*/
$txt['new_pm_tolist_subject'] = 'নতুন ব্যক্তিগত বার্তা: {SUBJECT}';
$txt['new_pm_tolist_body'] = 'আপনি এবং {TOLIST} কে {SENDER} দ্বারা {FORUMNAME} এ একটি ব্যক্তিগত বার্তা পাঠানো হয়েছে।

গুরুতর: মনে রাখবেন, এটি শুধুমাত্র একটি বিজ্ঞপ্তি। দয়া করে এই ইমেইলে উত্তর দেবেন না।

এই ব্যক্তিগত বার্তাটি পড়ুন এখানে: {READLINK}

এই ব্যক্তিগত বার্তায় উত্তর দিন (শুধুমাত্র প্রেরকের জন্য) এখানে: {REPLYLINK}

{REGARDS}';

/**
	@additional_params: new_pm_body_tolist
		SUBJECT: ব্যক্তিগত বার্তার বিষয়।
		SENDER:  ব্যক্তিগত বার্তা পাঠানো সদস্যের ব্যবহারকারীর নাম।
		MESSAGE:  ব্যক্তিগত বার্তার পাঠ্য।
		REPLYLINK:  উত্তর দেওয়ার পৃষ্ঠায় সরাসরি প্রবেশের লিঙ্ক।
		TOLIST:  যাদেরকে ব্যক্তিগত বার্তা পাঠানো হবে তাদের তালিকা।
	@description: ব্যক্তিগত বার্তার প্রাপককে পাঠানো একটি বিজ্ঞপ্তি ইমেইল
*/
$txt['new_pm_body_tolist_subject'] = 'নতুন ব্যক্তিগত বার্তা: {SUBJECT}';
$txt['new_pm_body_tolist_body'] = 'আপনি এবং {TOLIST} কে {SENDER} দ্বারা {FORUMNAME} এ একটি ব্যক্তিগত বার্তা পাঠানো হয়েছে।

গুরুতর: মনে রাখবেন, এটি শুধুমাত্র একটি বিজ্ঞপ্তি। দয়া করে এই ইমেইলে উত্তর দেবেন না।

তারা আপনাকে যে বার্তাটি পাঠিয়েছে তা হল:

{MESSAGE}

এই ব্যক্তিগত বার্তায় উত্তর দিন (শুধুমাত্র প্রেরকের জন্য) এখানে: {REPLYLINK}

{REGARDS}';

/**
	@additional_params: msg_quote
		CONTENTSUBJECT: পোস্টের বিষয়।
		QUOTENAME:  উদ্ধৃতি তৈরি করা সদস্যের ব্যবহারকারীর নাম।
		MEMBERNAME:  উদ্ধৃত সদস্যের ব্যবহারকারীর নাম।
		CONTENTLINK:  পোস্টের লিঙ্ক।
	@description: পোস্টে উদ্ধৃত সদস্যদের জন্য একটি বিজ্ঞপ্তি ইমেইল পাঠানো হয়
 */
$txt['msg_quote_subject'] = 'আপনাকে উদ্ধৃত করা হয়েছে পোস্টে: {CONTENTSUBJECT}';
$txt['msg_quote_body'] = 'হ্যালো {MEMBERNAME},

আপনাকে "{CONTENTSUBJECT}" শিরোনামের পোস্টে {QUOTENAME} দ্বারা উদ্ধৃত করা হয়েছে, আপনি পোস্টটি এখানে দেখতে পারেন:
{CONTENTLINK}

{REGARDS}';

/**
	@additional_params: msg_mention
		CONTENTSUBJECT: পোস্টের বিষয়।
		MENTIONNAME:  উল্লেখ তৈরি করা সদস্যের ব্যবহারকারীর নাম।
		MEMBERNAME:  উল্লেখিত সদস্যের ব্যবহারকারীর নাম।
		CONTENTLINK:  পোস্টের লিঙ্ক।
	@description: পোস্টে উল্লেখিত সদস্যদের জন্য একটি বিজ্ঞপ্তি ইমেইল পাঠানো হয়
 */
$txt['msg_mention_subject'] = 'আপনাকে উল্লেখ করা হয়েছে পোস্টে: {CONTENTSUBJECT}';
$txt['msg_mention_body'] = 'হ্যালো {MEMBERNAME},

আপনাকে "{CONTENTSUBJECT}" শিরোনামের পোস্টে {MENTIONNAME} দ্বারা উল্লেখ করা হয়েছে, আপনি পোস্টটি এখানে দেখতে পারেন:
{CONTENTLINK}

{REGARDS}';

/**
	@additional_params: happy_birthday
		REALNAME: জন্মদিনের বার্তা পাওয়া ব্যক্তির প্রকৃত (ডিসপ্লে) নাম।
	@description: সদস্যদের জন্য তাদের জন্মদিনে একটি বার্তা পাঠানো হয়।
*/
$txtBirthdayEmails['happy_birthday_subject'] = '{FORUMNAME} থেকে শুভ জন্মদিন।';
$txtBirthdayEmails['happy_birthday_body'] = 'প্রিয় {REALNAME},

আমরা এখানে {FORUMNAME} এ আপনাকে একটি শুভ জন্মদিনের শুভেচ্ছা জানাতে চাই। আপনার এই দিন এবং পরবর্তী বছরটি আনন্দে পূর্ণ হোক।

{REGARDS}';
$txtBirthdayEmails['happy_birthday_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>';

$txtBirthdayEmails['karlbenson1_subject'] = 'আপনার জন্মদিনে...';
$txtBirthdayEmails['karlbenson1_body'] = 'আমরা আপনাকে একটি জন্মদিনের কার্ড পাঠাতে পারতাম। আমরা আপনাকে কিছু ফুল বা একটি কেক পাঠাতে পারতাম।

কিন্তু আমরা তা করিনি।

আমরা এমনকি আপনাকে একটি স্বয়ংক্রিয়ভাবে তৈরি করা বার্তা পাঠাতে পারতাম যাতে আমরা শুভ জন্মদিনের জন্য INSERT NAME প্রতিস্থাপনও করতে হয় না।

কিন্তু আমরা তা করিনি।

আমরা আপনার জন্য এই জন্মদিনের শুভেচ্ছা লিখেছি।

আমরা আপনাকে একটি খুব বিশেষ জন্মদিনের শুভেচ্ছা জানাতে চাই।

{REGARDS}

//:: এই বার্তাটি স্বয়ংক্রিয়ভাবে তৈরি করা হয়েছে :://';
$txtBirthdayEmails['karlbenson1_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

$txtBirthdayEmails['nite0859_subject'] = 'শুভ জন্মদিন!';
$txtBirthdayEmails['nite0859_body'] = 'আপনার বন্ধুদের পক্ষ থেকে {FORUMNAME} আপনাকে একটি মুহূর্ত সময় নিয়ে শুভ জন্মদিনের শুভেচ্ছা জানাতে চায়, {REALNAME}। যদি আপনি সম্প্রতি এটি না করে থাকেন, দয়া করে আমাদের সম্প্রদায়ে যান যাতে অন্যরা তাদের উষ্ণ শুভেচ্ছা জানাতে পারে।

আজ আপনার জন্মদিন, {REALNAME}, আমরা আপনাকে মনে করিয়ে দিতে চাই যে আমাদের সম্প্রদায়ে আপনার সদস্যপদ আমাদের জন্য এখন পর্যন্ত সবচেয়ে ভালো উপহার।

শ্রেষ্ঠ শুভেচ্ছা,
{FORUMNAME} এর কর্মীরা';
$txtBirthdayEmails['nite0859_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>';

$txtBirthdayEmails['zwaldowski_subject'] = '{REALNAME} এর জন্য জন্মদিনের শুভেচ্ছা';
$txtBirthdayEmails['zwaldowski_body'] = 'প্রিয় {REALNAME},

আপনার জীবনের আরেকটি বছর পার হয়ে গেছে। আমরা {FORUMNAME} এ আশা করি এটি সুখে পূর্ণ ছিল, এবং আগামী বছরে আপনার জন্য শুভকামনা জানাই।

{REGARDS}';
$txtBirthdayEmails['zwaldowski_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>';

$txtBirthdayEmails['geezmo_subject'] = 'শুভ জন্মদিন, {REALNAME}!';
$txtBirthdayEmails['geezmo_body'] = 'আপনি কি জানেন আজ কার জন্মদিন, {REALNAME}?

আমরা জানি... আপনি!

শুভ জন্মদিন!

আপনি এখন এক বছর বড় হলেন কিন্তু আমরা আশা করি আপনি গত বছরের চেয়ে অনেক বেশি খুশি।

আজকের দিনটি উপভোগ করুন, {REALNAME}!

- আপনার {FORUMNAME} পরিবারের পক্ষ থেকে';
$txtBirthdayEmails['geezmo_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>';

$txtBirthdayEmails['karlbenson2_subject'] = 'আপনার জন্মদিনের শুভেচ্ছা';
$txtBirthdayEmails['karlbenson2_body'] = 'আমরা আশা করি আপনার জন্মদিনটি সেরা হবে; মেঘলা, রোদেলা বা যাই হোক না কেন আবহাওয়া।
অনেক জন্মদিনের কেক এবং মজার সাথে কাটান, এবং আমাদের জানান আপনি কি করেছেন।

আমরা আশা করি এই বার্তাটি আপনাকে আনন্দ দিয়েছে, এবং এটি বজায় থাকুক, আগামী বছর একই সময়ে একই স্থানে। 

{REGARDS}';
$txtBirthdayEmails['karlbenson2_author'] = '<a href="https://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

?>