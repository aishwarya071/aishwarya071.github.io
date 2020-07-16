from django.urls import include, path
from my_contact_data import views
 
app_name='my_contact_data'
 
urlpatterns = [
    path('',views.home,name='home'),
    path('portfolio',views.portfolio,name='aboutus'),
    path('ContactUs',views.ContactUs,name='contactdata'),
    path('Contact_form_submit',views.Contact_form_submit,name='Contact_form_submit')
]
