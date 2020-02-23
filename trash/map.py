import folium

center=[(37.975602+37.935979)/2,( 23.734048+23.948560)/2]

m = folium.Map(location=center, zoom_start = 12)
tooltip='Πάτα για περισσότερες πληροφορίες'
afethria=[37.975602, 23.734048]
proorismos=[37.935979, 23.948560]

folium.Marker(location=afethria,
        popup='<strong>Αφετηρία</strong>',
        tooltip=tooltip).add_to(m)
folium.Marker(location=proorismos,
        popup='<strong>Προορισμός</strong>',
        tooltip=tooltip,
        icon=folium.Icon(icon='cloud')).add_to(m)

folium.PolyLine(locations=[afethria, proorismos], color='blue').add_to(m)

m.save('mapping.html')