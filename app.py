import gspread
from flask import Flask, request, jsonify
from oauth2client.service_account import ServiceAccountCredentials

# Define the scope of the credentials
scope = ['https://spreadsheets.google.com/feeds', 'https://www.googleapis.com/auth/drive']

# Load the credentials file
creds = ServiceAccountCredentials.from_json_keyfile_name('client_secret.json', scope)

# Authorize the credentials
client = gspread.authorize(creds)

# Open the Google Sheet by name
sheet = client.open('Style Profile').sheet1

sheet2 = client.open('Bodytype').sheet1

# Get all the data from the sheet with the first row as headers
data = sheet.get_all_records()
app = Flask(__name__)

@app.route('/recommend', methods=['POST'])
def product_recommend():
    value = request.get_json().get('texts')
    email = sheet.col_values(2)
    for item in email:
        if item == value:
            column_values = sheet.col_values(2)
            row_number = column_values.index(item) + 1
            break     
    values_list = sheet.row_values(row_number)
    username = values_list[0]
    email_gen = values_list[1]
    weight = values_list[2]
    height = values_list[3]
    gender = values_list[4]
    if gender == "Female":
        body_type = values_list[5]
        fit = values_list[6]
        every_day_style = values_list[7]
        style = values_list[8]
        tops = values_list[9]
        skirts = values_list[10]
        bottom = values_list[11]
    elif gender == "Male":
        body_type = values_list[12]
        fit = values_list[13]
        every_day_style = values_list[14]
        style = values_list[15]
        tops = values_list[16]
        skirts = " "
        bottom = values_list[17]
    response = {
        'username': username,
        'email': email_gen,
        'weight': weight,
        'height': height,
        'gender': gender,
        'body_type': body_type,
        'fit': fit,
        'every_day_style': every_day_style,
        'style': style,
        'tops': tops,
        'skirts': skirts,
        'bottom': bottom
    }
    
    return jsonify(response)

@app.route('/bodytype', methods=['POST'])
def bodytype_recommend():
    value = request.get_json().get('texts')
    bodytype = sheet2.col_values(1)
    for item in bodytype:
        if item == value:
            column_values = sheet2.col_values(1)
            row_number = column_values.index(item) + 1
            break     
    values_list = sheet2.row_values(row_number)
    tops = values_list[2]
    jackets = values_list[3]
    cardigans = values_list[4]
    coats = values_list[5]
    trousers = values_list[6]
    jeans = values_list[7]
    skirts = values_list[8]
    dress = values_list[9]
    blazers = values_list[10]
    tshirts = values_list[11]
    shirts = values_list[12]
    jumpers = values_list[13]
    sweats = values_list[14] 

    response = {
        'tops': tops,
        'jackets': jackets,
        'cardigans': cardigans,
        'coats': coats,
        'trousers': trousers,
        'jeans': jeans,
        'skirts': skirts,
        'dress': dress,
        'blazers': blazers,
        'tshirts': tshirts,
        'shirts': shirts,
        'jumpers': jumpers,
        'sweats': sweats,
    }
    
    return jsonify(response)

if __name__ == '__main__':
    app.run()


    
