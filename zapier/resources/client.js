// get a list of clients
const performList = async (z, bundle) => {
  const response = await z.request({
    url: 'https://skrentals.systems/api/clients',
    params: {
      order_by: 'id desc'
    }
  });
  return response.data
};

// find a particular client by name (or other search criteria)
const performSearch = async (z, bundle) => {
  const response = await z.request({
    url: 'https://skrentals.systems/api/clients',
    params: {
      booking_id: bundle.inputData.booking_id,
      first_name: bundle.inputData.first_name,
      last_name: bundle.inputData.last_name,
      email: bundle.inputData.email,
      phone: bundle.inputData.phone,
      zip_code: bundle.inputData.zip_code,
      activity_date: bundle.inputData.activity_date,
      purchase_date: bundle.inputData.purchase_date,
      activity_item: bundle.inputData.activity_item,
      total_charge: bundle.inputData.total_charge,
      payment_status: bundle.inputData.payment_status,
      ticket_list: bundle.inputData.ticket_list,
      source: bundle.inputData.source,
      purchase_type: bundle.inputData.purchase_type,
      payment_type: bundle.inputData.payment_type,
      list_price: bundle.inputData.list_price,
      total_discount_amount: bundle.inputData.total_discount_amount,
      customer_fees: bundle.inputData.customer_fees
    }
  });
  return response.data
};

// creates a new client
const performCreate = async (z, bundle) => {
  const response = await z.request({
    method: 'POST',
    url: 'https://skrentals.systems/api/clients',
    body: {
      booking_id: bundle.inputData.booking_id,
      first_name: bundle.inputData.first_name,
      last_name: bundle.inputData.last_name,
      email: bundle.inputData.email,
      phone: bundle.inputData.phone,
      zip_code: bundle.inputData.zip_code,
      activity_date: bundle.inputData.activity_date,
      purchase_date: bundle.inputData.purchase_date,
      activity_item: bundle.inputData.activity_item,
      total_charge: bundle.inputData.total_charge,
      payment_status: bundle.inputData.payment_status,
      ticket_list: bundle.inputData.ticket_list,
      source: bundle.inputData.source,
      purchase_type: bundle.inputData.purchase_type,
      payment_type: bundle.inputData.payment_type,
      list_price: bundle.inputData.list_price,
      total_discount_amount: bundle.inputData.total_discount_amount,
      customer_fees: bundle.inputData.customer_fees
    }
  });
  return response.data
};

module.exports = {
  // see here for a full list of available properties:
  // https://github.com/zapier/zapier-platform/blob/main/packages/schema/docs/build/schema.md#resourceschema
  key: 'client',
  noun: 'Rental',

  // If `get` is defined, it will be called after a `search` or `create`
  // useful if your `searches` and `creates` return sparse objects
  // get: {
  //   display: {
  //     label: 'Get Client',
  //     description: 'Gets a client.'
  //   },
  //   operation: {
  //     inputFields: [
  //       {key: 'id', required: true}
  //     ],
  //     perform: defineMe
  //   }
  // },

  list: {
    display: {
      label: 'New Rental',
      description: 'Lists the Rentals.'
    },
    operation: {
      perform: performList,
      // `inputFields` defines the fields a user could provide
      // Zapier will pass them in as `bundle.inputData` later. They're optional on triggers, but required on searches and creates.
      inputFields: []
    }
  },

  search: {
    display: {
      label: 'Find Rental',
      description: 'Finds a Rental.'
    },
    operation: {
      inputFields: [
        {key: 'email', required: false}
      ],
      perform: performSearch
    },
  },

  create: {
    display: {
      label: 'Create Rental',
      description: 'Creates a new Rental.'
    },
    operation: {
      inputFields: [
        {key: 'first_name', required: true},
        {key: 'last_name', required: false},
        {key: 'booking_id', required: false},
        {key: 'email', required: false},
        {key: 'phone', required: false},
        {key: 'zip_code', required: false},
        {key: 'activity_date', required: false},
        {key: 'purchase_date', required: false},
        {key: 'activity_item', required: false},
        {key: 'total_charge', required: false},
        {key: 'payment_status', required: false},
        {key: 'ticket_list', required: false},
        {key: 'source', required: false},
        {key: 'purchase_type', required: false},
        {key: 'list_price', required: false},
        {key: 'total_discount_amount', required: false},
        {key: 'customer_fees', required: false}
      ],
      perform: performCreate
    },
  },

  // In cases where Zapier needs to show an example record to the user, but we are unable to get a live example
  // from the API, Zapier will fallback to this hard-coded sample. It should reflect the data structure of
  // returned records, and have obvious placeholder values that we can show to any user.
  // In this resource, the sample is reused across all methods
  sample: {
    id: 1,
    first_name: 'Someones Name',
    last_name: 'Last',
    phone: '123-345-4556',
    email: 'testemail@email.com',
    zip_code: '98765',
    booking_id: '111111',
  },

  // If fields are custom to each user (like spreadsheet columns), `outputFields` can create human labels
  // For a more complete example of using dynamic fields see
  // https://github.com/zapier/zapier-platform/tree/main/packages/cli#customdynamic-fields
  // Alternatively, a static field definition can be provided, to specify labels for the fields
  // In this resource, these output fields are reused across all resources
  outputFields: [
    {key: 'id', label: 'ID'},
    {key: 'booking_id', label: 'Booking ID'},
    {key: 'first_name', label: 'First Name'},
    {key: 'last_name', label: 'Last Name'},
    {key: 'email', label: 'Email'},
    {key: 'phone', label: 'Phone'},
    {key: 'zip_code', label: 'Zip Code'},
    {key: 'activity_item', label: 'Rental Name'},
    {key: 'activity_date', label: 'Rental Date'},
    {key: 'activity_time', label: 'Rental Time'},
    {key: 'total_charge', label: 'Total Cost'},
    {key: 'payment_status', label: 'Status'},
    {key: 'ticket_list', label: 'Ticket List'},
    {key: 'source', label: 'Source'},
    {key: 'purchase_type', label: 'Purchase Typee'},
    {key: 'list_price', label: 'List Price'},
    {key: 'total_discount_amount', label: 'Total Discount'},
    {key: 'customer_fees', label: 'Fees'}
  ]
};
