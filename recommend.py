import gspread
from oauth2client.service_account import ServiceAccountCredentials

# Define the scope of the credentials
scope = ['https://spreadsheets.google.com/feeds', 'https://www.googleapis.com/auth/drive']

# Load the credentials file
creds = ServiceAccountCredentials.from_json_keyfile_name('client_secret.json', scope)

# Authorize the credentials
client = gspread.authorize(creds)

# Open the Google Sheet by name
sheet = client.open('Style Profile').sheet1

# Get all the data from the sheet with the first row as headers
data = sheet.get_all_records()

# Print the data
print(data)