<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000025',
        'locale' => 'en_US',
        'title' => 'Subscriptions',
        'toc' => 'journal/toc/000001',
        'key' => 'journal.managementPages.subscriptions',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>OJS supports subscription journals by providing a subscription management component and a corresponding password protection for the journal\'s online content. The subscriptions can be managed for individual users, organizations or institutions. A subscription journal can also offer free access to its back issues through a form of delayed open access. In Issue Management, the Editor allows readers free access to the content of an issue or individual articles from zero to 24 months after their initial publication and availability to subscribers.</p><p>A journal\'s Managers, Editors, Section Editors, Layout Editors, Copyeditors, and Proofreaders are always free to access the journal as though they were subscribers.</p><p><em>Deploying the subscription module</em>. The Journal Manager must indicate in Setup, 4.1 Access and Security Settings, that the journal will be using this system to manage its subscriptions and that someone, enrolled as a Journal Manager or Subscription Manager, has been designated to manage this feature. The person designated, along with contact information, should be identified as the Subscription Contact under Subscription Policies (please see below).</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Subscription Types',
      ),
      'value' => '<p><em>Setting up the Subscription Types</em>. The first step in setting up the subscription management is to designate the types of subscriptions the journal offers. Journals typically offer, for example, individual subscription and institutional subscription rates. Some journals may have special offers for members of an organization or students. OJS will support the management of print and/or online subscriptions. More than one type of subscription can be created to cover longer periods of time (12 months, 36 months). A subscription type may be designated as non-expiring for more permanent subscriptions that should never expire (e.g. partner institutions).</p><p><em>Options for Subscription Types</em>. Each subscription type must be identified as either an Individual subscription type or an Institutional subscription type. Individual subscriptions require users to login to the journal to validate their subscription and access subscription content. In contrast, users accessing subscription content via an Institutional subscription are not required to login, since the institutional domain and/or IP addresses are used to validate the subscription and permit access. For both Individual and Institutional subscriptions, the option "Subscriptions require membership information" can be used to identify  membership subscriptions, whether free to members or at a discount. With this option enabled, each subscription will require membership information as part of the subscription record. The option "Do not make this subscription type publicly available or visible" can be used to disable the type\'s availability to users when purchasing subscriptions and its visibility under Subscriptions on the About the Journal page. While most subscription types are typically available and publicly displayed, a type created for internal accounting, staff subscriptions, and/or management purposes, for example, can be restricted via this option.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Subscriptions',
      ),
      'value' => '<p><em>Individual Subscriptions</em>. For individual subscriptions, the Journal (Subscription) Manager has to first register the user as a reader, if not already registered, and then on the Create Subscription page, select this user as the subscriber. The Journal (Subscription) Manager can then select the subscription type, set the dates for the subscription, and enter any membership and/or reference information, if applicable. The Journal (Subscription) Manager can also update the user\'s profile and contact information, if required. All updates via the Create and Edit Subscription pages are saved directly to the user\'s system-wide profile. Lastly, the Journal (Subscription) Manager may select the option "Send the user an email with their username and subscription details" to email the user login instructions and the details of the subscription.</p><p><em>Institutional Subscriptions</em>. For institutional subscriptions, the Journal (Subscription) Manager has to first register the user that will be the contact person for the subscription as a reader, if not already registered, and then on the Create Subscription page, select this user as the institutional contact person for the subscription. The Journal (Subscription) Manager can then select the subscription type, set the dates for the subscription, enter the institution name, mailing address, domain, and/or IP addresses, and enter any membership and/or reference information, if applicable. The Journal (Subscription) Manager can also update the contact person\'s profile and contact information, if required. All updates via the Create and Edit Subscription pages are saved directly to the user\'s system-wide profile. Lastly, the Journal (Subscription) Manager may select the option "Send the user an email with their username and subscription details" to email the institutional contact person login instructions and the details of the subscription. This login information is solely for the contact person listed in the subscription. Users at the institution do not need to login to access subscription content and are authenticated automatically via the institutional domain and/or IP addresses.</p><p><em>Subscription Status</em>. Each subscription includes a status field to indicate the current state of the subscription. In order for a subscription to be considered valid by the system and enable the corresponding user or institution access to subscription content, the subscription status must be set to "Active" and the subscription must have valid start and end dates. The Journal (Subscription) Manager may use the subscription status for fine-grained management of subscription records and/or to temporarily suspend subscriptions, for example, if waiting to receive additional information from a subscriber or if waiting to receive payment from a subscriber.',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Subscription Policies',
      ),
      'value' => '<p>Under Subscription Policies, the Journal Manager can enter Subscription Manager contact information, which will appear in About the Journal; enter additional information about subscriptions to appear in About the Journal (subscription types and the fee structure will already appear there); set subscription expiry reminders; set open access options; and define an Author self-archiving policy, also to appear in About the Journal.</p>',
    ),
  ),
); ?>