# Nowapy Lead Generator (PHP + Google Places)

## Step 1: Hosting Setup
- Use https://www.000webhost.com
- Create a free account and subdomain
- Open File Manager → Upload all files to /public_html

## Step 2: Create Database
- Go to Database Manager → Create new MySQL DB
- Note your DB name, user, password
- Open phpMyAdmin → Import places.sql

## Step 3: Configure
- Edit config.php with your DB credentials
- Replace YOUR_GOOGLE_API_KEY with your actual key in generate_leads.php

## Step 4: Automate (Optional)
- Set Cron Job to run https://your-subdomain.000webhostapp.com/generate_leads.php daily

## Step 5: Use it!
- Go to https://your-subdomain.000webhostapp.com/index.php
- Generate leads → View captured data
