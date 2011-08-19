<?php return array (
  0 => 'Modify Company Identity',
  1 => 'Current Logo',
  2 => 'Upload new logo',
  3 => 'New Company logo:',
  4 => 'Company Name',
  5 => 'Company Details',
  6 => 'Image is scaled for display purposes',
  7 => 'Additional information you want to be displayed in invoice header (address, bank account number etc)',
  8 => 'Modify',
  9 => ':name\'s Invoices',
  10 => 'Paid',
  11 => 'Invoice #',
  12 => 'Download Invoice in PDF Format',
  13 => 'There are no invoices issued to :name',
  14 => ':name does not have any paid invoices',
  15 => ':name does not have any canceled invoices',
  16 => 'Invoices',
  17 => ':name\'s Payments',
  18 => 'Invoice',
  19 => 'Amount',
  20 => 'Paid On',
  21 => ':name has not made any payments',
  22 => 'Payments',
  23 => 'Download PDF',
  24 => 'Draft',
  25 => 'Qty.',
  26 => 'Unit Cost',
  27 => 'Tax',
  28 => 'Total',
  29 => 'Total Cost',
  30 => 'This invoice has no items',
  31 => 'Note',
  32 => 'There are no payments for this invoice',
  33 => 'Code',
  34 => 'Default Hourly Rate',
  35 => 'Default hourly rate for this currency. It can be overriden in invoices',
  36 => 'New Currency',
  37 => 'Update Currency',
  38 => 'Currencies',
  39 => 'Currency',
  40 => 'Default Rate',
  41 => 'There are no currencies defined. Would you like to <a href=":add_url">create one</a>?',
  42 => 'List All',
  43 => 'Are you sure that you want to delete selected currency?',
  44 => 'About Currencies',
  45 => 'If you are working with international customers you might have requirement for issuing invoices in different currencies. Use this tool to define currencies you want to use when creating invoices. Currency is set per invoice',
  46 => 'Hourly Rate',
  47 => 'Invoicing module lets you define default hourly rate for each currency. When invoice is created based on a time report, system will automatically create first invoice item based on number of billable hours from the report by multiplying it with default hourly rate. Change of default hourly rate will not affect existing invoices',
  48 => 'About Invoice Sending',
  49 => 'Email will be Sent',
  50 => 'Person you select from recipients list will receive an email with invoice attached to it. Invoice is in PDF format. Additionally, a copy of this email will be sent to you for the reference and for you to see what your clients got',
  51 => 'Related Time Records',
  52 => 'All time records related with this invoice will be automatically marked as issued. When invoice is marked as billed all related time records will be automatically marked as billed. If invoice gets canceled, all related records will be automatically reverted to their original, billable state',
  53 => 'About Tax Rates',
  54 => 'Tax Rates',
  55 => 'System supports definition of unlimited number of tax rates, but only one tax rate can be used per invoice item. Each invoice item can have a different tax rate set or no tax applied at all. Tax rates that are already in used can\'t be deleted unless all invoices which use it are deleted',
  56 => 'Updating Tax Rate',
  57 => 'When you update a tax rate, change will be applied to all past and future invoices. If rate of any specific tax has been changed and you would like old invoices to preserve old rate, create a new tax rate instead of updating the old one',
  58 => 'About Invoice Time',
  59 => 'All time records related to this invoice will be automatically marked as "Pending Payment" when this invoice gets issued. When invoice is marked as billed, then all related time records will be automatically marked as billed, too. When the invoice is canceled, all related records will be automatically reverted to their original, billable state and released',
  60 => 'On Releasing Time Records',
  61 => 'When records are released, relation between this invoice and them is removed, without any records being deleted. Instead, releated records will be reverted to their original, billable state and invoice will not change their status in the future',
  62 => 'Item Description',
  63 => 'Unit Price',
  64 => 'Item Quantity',
  65 => 'New Predefined Invoice Item',
  66 => 'New Item',
  67 => 'Edit Item: :description',
  68 => 'Item Templates',
  69 => 'Quantity',
  70 => 'No predefined items specified yet. <a href=":add_url">Create one now</a>.',
  71 => 'View All',
  72 => 'Choose Invoice Note:',
  73 => 'Note Content:',
  74 => 'HTML not supported! Line breaks are preserved.',
  75 => 'Add Invoicing Note',
  76 => 'New Invoicing Note',
  77 => 'Edit Note Template: :name',
  78 => 'Invoice Note Templates',
  79 => 'Tite',
  80 => 'Content',
  81 => 'No predefined notes specified yet. <a href=":add_url">Create one now</a>.',
  82 => 'Number Generator',
  83 => 'Generator Pattern',
  84 => 'Preview',
  85 => 'Available Counter and Variables',
  86 => 'Invoice number in total',
  87 => 'Invoice number in current year',
  88 => 'Invoice number in current month',
  89 => 'Current year in number format',
  90 => 'Current month in number format',
  91 => 'Current month in short text format',
  92 => 'Current month in long text format',
  93 => 'Max amount that can be paid is',
  94 => 'New Payment',
  95 => 'Update Payment',
  96 => 'Paid on',
  97 => 'There are no payments in the database',
  98 => 'Are you sure that you want to mark this payment as deleted?',
  99 => 'Invoice ID',
  100 => 'Issued On',
  101 => 'Client Address',
  102 => 'Predefined Note',
  103 => 'Invoice Note',
  104 => 'Our Comment',
  105 => 'Automatically generate on issue',
  106 => 'Specify',
  107 => 'Generate',
  108 => 'Subtotal',
  109 => 'Add New Item',
  110 => 'Add From Template',
  111 => 'Original Note',
  112 => 'Empty Note',
  113 => 'Custom Note',
  114 => 'This comment is NEVER displayed to client or included in the final invoice',
  115 => 'New Invoice',
  116 => 'Total Invoices',
  117 => 'Total Paid',
  118 => 'There are no archived invoices in the database',
  119 => 'Statistics',
  120 => 'Update Invoice',
  121 => 'Issued Invoices',
  122 => 'Invoice Drafts',
  123 => 'Billed Invoices',
  124 => 'Canceled Invoices',
  125 => 'Issued',
  126 => 'Drafts (:count)',
  127 => 'Billed',
  128 => 'There are no invoices on this page',
  129 => 'Drafts',
  130 => 'Add Payment',
  131 => 'View Invoice Details',
  132 => 'Issue Invoice',
  133 => 'Send email to client',
  134 => 'Don\'t send emails, but mark invoice as issued',
  135 => 'Issue',
  136 => 'Invoice Updated',
  137 => 'Don\'t send email and view updated invoice',
  138 => 'Invoice updated',
  139 => ':name Time',
  140 => 'Date',
  141 => 'Hours',
  142 => 'There is no time attached to this invoice',
  143 => 'Release Records',
  144 => 'Are you sure that you want to remove relation between this invoice and time records listed above? Note that time records will NOT be deleted!',
  145 => 'Preview PDF',
  146 => 'View PDF',
  147 => 'Duplicate',
  148 => 'Time Records (:count)',
  149 => 'No comment',
  150 => 'Are you sure that you want to cancel this invoice? All existing payments associated with this invoice will be deleted!',
  151 => ':name\'s Billed / Canceled Invoices',
  152 => 'Billed / Canceled On',
  153 => 'There are no archived company invoices to show',
  154 => 'Active Invoices',
  155 => 'Invoicing Module',
  156 => 'Create and Manage Invoices?',
  157 => 'Change PDF Settings',
  158 => 'Paper Size:',
  159 => 'Paper Orientation:',
  160 => 'Header and Footer Text Color:',
  161 => 'Page Text Color:',
  162 => 'Border Color:',
  163 => 'Table Header Background Color:',
  164 => 'Paper Settings',
  165 => 'Colors and Styles',
  166 => 'Tax Percentage ',
  167 => 'New Tax Rate',
  168 => 'Submit ',
  169 => 'Rate',
  170 => 'There are no tax rates defined. Would you like to <a href=":add_url">create one</a>?',
  171 => 'Are you sure that you want to delete this tax rate?',
  172 => 'Company identity successfully modified',
  173 => 'Invoicing Company Identity Settings',
  174 => 'Brand folder is not writable (:brand_folder). You will not be able to upload company logo.',
  175 => 'Company details are required',
  176 => 'Could not upload company logo',
  177 => '#:invoice_id.pdf',
  178 => 'Failed to delete ":name" currency',
  179 => 'Currency ":name" has been created',
  180 => 'Currency ":name" has been updated',
  181 => 'Currency ":name" has been deleted',
  182 => 'New item template is successfully created',
  183 => 'Item Template is successfully edited',
  184 => 'Item template successfully removed',
  185 => 'Failed to remove item template',
  186 => 'Invoicing',
  187 => 'Invoice Item Templates',
  188 => 'New Invoice Item',
  189 => 'Failed to delete note template',
  190 => 'Note template added succesfully',
  191 => 'Note template successfully deleted',
  192 => 'New Note Template',
  193 => 'Pattern for invoice number generator is saved',
  194 => 'Pattern is required',
  195 => 'One of invoice counters is required (:total, :year, :month)',
  196 => 'Failed to delete selected payment',
  197 => 'Payment #:id has been added',
  198 => 'Payment #:id has been updated',
  199 => 'Payment has been successfully deleted',
  200 => 'User does not exists',
  201 => 'Failed to cancel invoice #:number',
  202 => 'Failed to delete :invoice',
  203 => 'Failed to release related time records',
  204 => 'Invoice ":number" has been created',
  205 => '":number" has been updated',
  206 => 'Invoice has been issued',
  207 => 'Email sent successfully',
  208 => 'Invoice #:number has been canceled',
  209 => ':invoice has been deleted',
  210 => 'Releated time records have been releated',
  211 => '/work/invoices exists, but it is not writable. PDF files will not be generated',
  212 => '/work/invoices folder does not exist. PDF files will not be generated!',
  213 => ':invoice_id.pdf',
  214 => 'Total of :total hours in :project project',
  215 => 'Total of :total hours',
  216 => 'Ticket: :ticket_name',
  217 => 'Task: :task_name',
  218 => 'Invoice items data is not valid. All descriptions are required and there need to be at least one unit with cost set per item!',
  219 => 'Payment has been saved',
  220 => 'Payment has been updated',
  221 => 'Send',
  222 => 'Successfully modified PDF settings',
  223 => 'Invoicing PDF Settings',
  224 => 'Failed to delete ":name" tax rate',
  225 => 'Tax Rate ":name" has been created',
  226 => 'Tax rate ":name" has been updated',
  227 => 'Tax rate ":name" has been deleted',
  228 => 'Updating of this tax rate will also update all existing invoices. If that is not an option, consider creating a new tax rate',
  229 => 'Company Identity',
  230 => 'Change company identity information that will be show in PDF report',
  231 => 'PDF Settings',
  232 => 'Configure settings for invoicing module',
  233 => 'Configure automatic invoice number generator',
  234 => 'Configure predefiend invoicing items',
  235 => 'Note Templates',
  236 => 'Configure predefined notes for invoices',
  237 => 'Configure tax rates for Invoicing module',
  238 => 'Configure currencies and default hourly rates for Invoicing module',
  239 => '<strong>:count</strong> overdue invoices for all companies',
  240 => '<strong>:count</strong> overdue invoice for all companies',
  241 => '<strong>1</strong> outstanding invoice for your company',
  242 => '<strong>:count</strong> outstanding invoices for your company',
  243 => '<strong>1</strong> overdue invoice for your company',
  244 => '<strong>:count</strong> overdue invoices for your company',
  245 => 'Create Invoice',
  246 => 'Billled',
  247 => 'Adds invoicing support to activeCollab',
  248 => 'Module will be deactivated. Invoices created using this module will be deleted',
  249 => 'Currency name needs to be unqiue',
  250 => 'Currency name is required',
  251 => 'Currency code needs to be unqiue',
  252 => 'Currency code is required',
  253 => 'Description is required',
  254 => 'Quantity is required',
  255 => 'Item description is required',
  256 => 'Note name is required',
  257 => 'Note content is required',
  258 => 'Payment day is required',
  259 => 'Amount too large',
  260 => 'Payment amounts needs to be larger than 0',
  261 => 'Payment amount is required',
  262 => 'Invoice is required',
  263 => 'PRO FORMA :num',
  264 => 'INVOICE :num',
  265 => 'Issued On: :issued_date',
  266 => 'Due On: :due_date',
  267 => 'Sub Total:',
  268 => 'Tax:',
  269 => 'Total:',
  270 => 'Note:',
  271 => 'Page :page_no of :total_pages',
  272 => '#:num',
  273 => 'Invoice #:num',
  274 => 'Draft #:invoice_id',
  275 => 'Invoice Draft #:invoice_id',
  276 => 'Unknown Currency',
  277 => 'Are you sure that you want to delete this invoice?',
  278 => 'Client is required',
  279 => 'Client address is required',
  280 => 'Invoice No. needs to be unqiue',
  281 => 'Tax Rate name is required',
); ?>