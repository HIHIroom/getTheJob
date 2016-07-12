package Gcalender;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.charset.Charset;
import java.util.Collections;

import com.google.api.client.googleapis.auth.oauth2.GoogleCredential;
import com.google.api.client.http.HttpTransport;
import com.google.api.client.http.javanet.NetHttpTransport;
import com.google.api.client.json.JsonFactory;
import com.google.api.client.json.jackson2.JacksonFactory;
import com.google.api.client.util.SecurityUtils;
import com.google.api.services.calendar.Calendar;
import com.google.api.services.calendar.CalendarScopes;
import com.google.common.io.Files;
import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.security.KeyStore;
import java.security.PrivateKey;

/**
 * @author Yaniv Inbar
 */
public class CalendarService {

  /**
   * Be sure to specify the name of your application. If the application name is {@code null} or
   * blank, the application will log a warning. Suggested format is "MyCompany-ProductName/1.0".
   */
  private static final String APPLICATION_NAME = "googleapi";

  /** E-mail address of the service account. */
  private static final String SERVICE_ACCOUNT_EMAIL = "affable-sky-135621@appspot.gserviceaccount.com";

  /** Global instance of the HTTP transport. */
  private static HttpTransport httpTransport;

  /** Global instance of the JSON factory. */
  private static final JsonFactory JSON_FACTORY = JacksonFactory.getDefaultInstance();


  public  Calendar configure() {
    try {
      try {
        httpTransport = new NetHttpTransport();
        // check for valid setup
        if (SERVICE_ACCOUNT_EMAIL.startsWith("Enter ")) {
          System.err.println(SERVICE_ACCOUNT_EMAIL);
          System.exit(1);
        }
      // URL loc = this.getClass().getResource("/googleapi-1962a3f43030.p12"); 
     //  String path = loc.getPath(); 
       // File file = new File(path);
    //   File file = new File("/googleapi-1962a3f43030.p12");
      KeyStore keystore = KeyStore.getInstance("PKCS12");
      keystore.load(MyFrame.class.getResourceAsStream("googleapi-1962a3f43030.p12"), "notasecret".toCharArray());
       PrivateKey pk = (PrivateKey)keystore.getKey("privatekey", "notasecret".toCharArray());
     
      /*  String p12Content = Files.readFirstLine(file, Charset.defaultCharset());
        if (p12Content.startsWith("Please")) {
          System.err.println(p12Content);
          System.exit(1);
        }*/
        // service account credential (uncomment setServiceAccountUser for domain-wide delegation)
        GoogleCredential credential = new GoogleCredential.Builder()
            .setTransport(httpTransport)
            .setJsonFactory(JSON_FACTORY)
            .setServiceAccountId(SERVICE_ACCOUNT_EMAIL)
            .setServiceAccountScopes(Collections.singleton(CalendarScopes.CALENDAR))
            .setServiceAccountPrivateKey(pk)
            .build();
     Calendar   client = new com.google.api.services.calendar.Calendar.Builder(
             httpTransport, JSON_FACTORY, credential)
                .setApplicationName(APPLICATION_NAME).build();
     System.out.println("Client : "+client);
     return client;

      } catch (IOException e) {
        System.err.println(e.getMessage());
      }
    } catch (Throwable t) {
      t.printStackTrace();
    }
    System.exit(1);
    return null;
  }
}